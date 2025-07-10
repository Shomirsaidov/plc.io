<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Auto;

use Illuminate\Support\Str;

use GuzzleHttp\Client;

class CarController extends Controller
{

    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars')); // Make sure 'cars.index' matches your Blade template for listing cars
    }

    public function create()
    {
        return view('create-car'); // Make sure 'create-car' matches your Blade template file name
    }

    public function filterCars(Request $request)
    {
        // Start a query builder for the Car model
        $query = Car::query();

        Log::info($request);


        // Filter by status (if checkbox is checked)
        if ($request->has('status')) {
            $statusFilters = $request->input('status'); // Expecting an array ['in_transit', 'available']
            $query->whereIn('status', $statusFilters);
        }

        // Filter by price range
        if ($request->filled('priceMin') && $request->filled('priceMax')) {
            $priceMin = $request->input('priceMin');
            $priceMax = $request->input('priceMax');
            $query->whereBetween('price', [$priceMin, $priceMax]);
        }

        // Filter by mileage range
        if ($request->filled('mileageMin') && $request->filled('mileageMax')) {
            $mileageMin = $request->input('mileageMin');
            $mileageMax = $request->input('mileageMax');
            $query->whereBetween('mileage', [$mileageMin, $mileageMax]);
        }

        // Filter by color (if checkbox is checked)
        if ($request->has('color')) {
            $colors = $request->input('color'); // Expecting an array ['white', 'black']
            $query->whereIn('color', $colors);
        }

        // Filter by engine type (if checkbox is checked)
        if ($request->has('engine')) {
            $engines = $request->input('engine'); // Expecting an array ['2.0', '3.0']
            $query->whereIn('engine', $engines);
        }

        // Get the results
        $cars = $query->get();

        // Return the results to the view or as JSON
        return view('filtered', ['cars' => $cars]);
    }








    public function store(Request $request)
    {
        Log::info('In the method!');
        Log::info('Incoming request data: ', $request->all());

        try {
            // 🧼 Step 1: Pre-clean image uploads before validation
            if ($request->hasFile('images')) {
                $validFiles = array_filter($request->file('images'), function ($file) {
                    return $file instanceof \Illuminate\Http\UploadedFile && $file->isValid();
                });
                $request->merge(['images' => $validFiles]);
            }

            // ✅ Step 2: Validate cleaned data
            $validatedData = $request->validate([
                'vin' => 'nullable|string|max:255',
                'lot' => 'nullable|string|max:255',
                'location' => 'nullable|string|max:255',
                'date' => 'nullable|string|max:255',
                'state' => 'nullable|string|max:255',
                'damages' => 'nullable|string|max:255',
                'sale_type' => 'nullable|string|max:255',
                'doc_type' => 'nullable|string|max:255',
                'min_price' => 'nullable|string|max:255',
                'avg_price' => 'nullable|string|max:255',
                'max_price' => 'nullable|string|max:255',
                'make' => 'nullable|string|max:255',
                'model' => 'nullable|string|max:255',
                'year' => 'nullable|integer',
                'body' => 'nullable|string|max:255',
                'mileage' => 'nullable|string|max:255',
                'fuel_type' => 'nullable|string|max:255',
                'transmission' => 'nullable|string|max:255',
                'drive' => 'nullable|string|max:255',
                'keys_' => 'nullable|string|max:255',
                'engine' => 'nullable|string|max:255',
                'color' => 'nullable|string|max:255',
                'width' => 'nullable|string|max:255',
                'length' => 'nullable|string|max:255',
                'height' => 'nullable|string|max:255',
                'weight' => 'nullable|string|max:255',
                'seats' => 'nullable|string|max:255',
                'speed' => 'nullable|string|max:255',
                'description' => 'nullable|string|max:999',
                'images' => 'nullable|array',
                'images.*' => 'file|mimes:jpg,jpeg,png,webp|max:10240', // Optional: better constraints
            ]);

            Log::info('Validation passed.', $validatedData);

            // 🖼 Step 3: Process image uploads
            if (!empty($validatedData['images'])) {
                $imagePaths = [];
                foreach ($validatedData['images'] as $image) {
                    $imageName = Str::random(10) . '.' . $image->getClientOriginalExtension();
                    $path = $image->storeAs('cars', $imageName, 'public');
                    $imagePaths[] = $path;
                }

                $validatedData['images'] = json_encode($imagePaths);
                Log::info('Stored image paths:', $imagePaths);
            }

            // 🚘 Step 4: Create car record
            Log::info('Creating car record...');
            $car = Auto::create($validatedData);
            Log::info('Car created with Auto: ' . $car->Auto);

            // 📲 Step 5: Notify via Telegram
            $message = "New car added! ID: <strong>" . $car->Auto . "</strong>";
            $telegramBotToken = '7896787171:AAEhSshrLT07wDAjhLVSqKPNxiVoDjULD6A';
            $chatIds = ['7130452492'];

            try {
                Log::info('Sending Telegram notifications...');
                foreach ($chatIds as $chatId) {
                    $this->sendTelegramMessage($telegramBotToken, $chatId, $message);
                }
            } catch (\Exception $e) {
                Log::error('Telegram message failed: ' . $e->getMessage());
            }

            Log::info('Finished car!');

            return redirect()->route('cars.show', ['vin' => $car->vin])
                ->with('success', 'Автомобиль успешно добавлен!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation failed.', [
                'errors' => $e->errors(),
                'incoming_data' => $request->all(),
            ]);

            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput();
        }
    }






















    public function show($vin)
    {
        $car = Auto::where('vin', $vin)->first();

        // Get 3 recently added cars, excluding the current one (by VIN)
        $recentCars = Auto::where('vin', '!=', $vin)
                        ->latest('id') // Assuming 'Auto' is the primary key/ID field and auto-incremented
                        ->take(3)
                        ->get();

        return view('car', [
            'car' => $car,
            'recentCars' => $recentCars
        ]);
    }


    public function editForm($id)
    {
        $car = Car::findOrFail($id);

        return view('edit-car', ['car' => $car]); 
    }

    public function edit(Request $request)
    {
        $id = $request->input('car_id');
        Log::info('before check 1');

        // Validate the incoming request
        $validatedData = $request->validate([
            
            'brand' => 'nullable|string',
            'model' => 'nullable|string',
            'year' => 'required|string',
            'fuel' => 'nullable|string',
            'vehicle' => 'nullable|string',
            'doors' => 'nullable|integer',
            'engine_si' => 'nullable|string',
            'engine_nom' => 'nullable|string',
            'horses' => 'nullable|string',
            'kilowatt' => 'nullable|string',
            'images' => 'nullable|string',
            'Auto' => 'nullable|string'
        ]);

        // Find the car by ID
        $car = Car::findOrFail($id);
        Log::info('before check');
        // Handle file upload if new images are provided
        if ($request->hasFile('images')) {
            Log::info('image uploading');
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                // Generate a unique file name using Str::random and the file's extension
                $imageName = Str::random(10) . '.' . $image->getClientOriginalExtension();
                // Store image in the 'public/storage/cars' folder using storeAs
                $path = $image->storeAs('cars', $imageName, 'public');
                $imagePaths[] = $path;
                Log::info('image uploaded');
            }
            // Include new image paths in the validated data to update the record
            $validatedData['images'] = $imagePaths;
        } else {
            // Remove the 'images' field from validated data to avoid modifying it
            unset($validatedData['images']);
        }

        // Update the car with validated data
        $car->update($validatedData);

        // Redirect back with a success message
        return redirect()->route('cars.show', $car->Auto)
                         ->with('success', 'Изменения внесены !');
    }

    public function no_filter(Request $request) {
        $cars = Auto::take(20)->get();
        return view('autos', ['cars' => $cars]);
    }

    public function china_no_filter(Request $request) {
        $cars = Car::where('country', 'Китай')->get();
        return view('china', ['cars' => $cars]);
    }

    public function search(Request $request) {
        $query = $request->query('query');

        // Try to find by VIN first
        $result = Auto::where('vin', 'LIKE', $query . '%')->get();

        // If not found, try make
        if (!$result) {
            $result = Auto::where('make', 'LIKE', $query . '%')->get();
        }

        // If not found, try model
        if (!$result) {
            $result = Auto::where('model', 'LIKE', $query . '%')->get();
        }

        // If not found, try lot
        if (!$result) {
            $result = Auto::where('lot', 'LIKE', $query . '%')->get();
        }

        if (!$result) {
            abort(404, 'No matching car found');
        }

        return view('autos', ['cars' => $result]);
    }


    public function china_filtered(Request $request)
    {
        // Start a query builder for the Car model
        $query = Car::query();

        Log::info($request);

        $query->where('country', 'Китай');


        // Filter by status (if checkbox is checked)
        if ($request->has('status')) {
            $statusFilters = $request->input('status'); // Expecting an array ['in_transit', 'available']
            $query->whereIn('status', $statusFilters);
        }



        // Filter by price range
        if ($request->filled('priceMin') && $request->filled('priceMax')) {
            $priceMin = $request->input('priceMin');
            $priceMax = $request->input('priceMax');
            $query->whereBetween('price', [$priceMin, $priceMax]);
        }

        // Filter by mileage range
        if ($request->filled('mileageMin') && $request->filled('mileageMax')) {
            $mileageMin = $request->input('mileageMin');
            $mileageMax = $request->input('mileageMax');
            $query->whereBetween('mileage', [$mileageMin, $mileageMax]);
        }

        // Filter by color (if checkbox is checked)
        if ($request->has('color')) {
            $colors = $request->input('color'); // Expecting an array ['white', 'black']
            $query->whereIn('color', $colors);
        }

        // Filter by color (if checkbox is checked)
        if ($request->has('car_brands')) {
            $brands = $request->input('car_brands'); 
            $query->whereIn('name', $brands);
        }

        // Filter by engine type (if checkbox is checked)
        if ($request->has('engine')) {
            $engines = $request->input('engine'); // Expecting an array ['2.0', '3.0']
            $query->whereIn('engine', $engines);
        }

        // Get the results
        $cars = $query->get();

        // Return the results to the view or as JSON
        return view('china-filtered', ['cars' => $cars]);
    }


    public function for_index(Request $request) {
        $us_pop = Auto::where('location', 'США')
            ->inRandomOrder()
            ->get();

        $korea_pop = Auto::where('location', 'Корея')
            ->inRandomOrder()
            ->get();


        $recentCars = Auto::latest('id') // Assuming 'Auto' is the primary key/ID field and auto-incremented
                        ->take(3)
                        ->get();

        return view('welcome', ['us_pop' => $us_pop, 'korea_pop' => $korea_pop, 'recentCars' => $recentCars]);
    }


    public function order(Request $request)
    {
        Log::info($request);
        // Validate and process the order details (e.g., car ID, user details, etc.)
        
        $car = Car::where('Auto',$request->input('car_id'))->first();
        $car_link = $car->Autocode;
        $userName = $request->input('user_name');
        $userContact = $request->input('user_contact');

        Log::info('in order 2');

        // Create a message to send to Telegram
        $message = "<strong>Новый заказ</strong>\n \n"
                . "ФИО: $userName\n"
                . "Телефон: +382 $userContact\n"
                . "Авто: $car->name $car->year\n "
                . "Ссылка на аукцион: $car_link\n"
                . "Auto: $car->Auto\n"
                . "Цена: $" . $car->price;

        $telegramBotToken = '7861388189:AAEFqem0aTOy3u6lLHK8Dy0OLBePT_x0pFU';
        $chatIds = ['7130452492','5375796546']; // Array of recipient chat IDs

        // Send the message to each chat ID
        foreach ($chatIds as $chatId) {
            $this->sendTelegramMessage($telegramBotToken, $chatId, $message);
        }

        Log::info('Order processed and sent to Telegram successfully.');

        return view('accepted');
    }

    private function sendTelegramMessage($token, $chatId, $message)
    {
        Log::info('in sending tg process... ');

        $client = new Client();

        $url = "https://api.telegram.org/bot{$token}/sendMessage";

        $response = $client->post($url, [
            'form_params' => [
                'chat_id' => $chatId,
                'text' => $message,
                'parse_mode' => 'HTML', // Optional, to format text
            ],
        ]);

        return $response;
    }


}
