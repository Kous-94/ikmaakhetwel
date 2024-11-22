<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentReminder;



class AppointmentController extends Controller
{
   
    public function index()
    {
        $appointments = Appointment::all();

        // Return the view with appointments
        return view('appointments.index', compact('appointments'));
    }

    public function show($id)
    {
        $appointment = Appointment::findOrFail($id);

        return view('appointments.show', compact('appointment'));
    }

    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();

        return redirect()->route('appointments.index')->with('success', 'Appointment deleted successfully!');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'reason' => 'required|string|max:255',
            'appointment_time' => 'required|date|after:now',
        ]);

        $appointment = Appointment::create([
            'name' => $request->name,
            'email' => $request->email,
            'reason' => $request->reason,
            'appointment_time' => $request->appointment_time,
        ]);

        $this->sendReminderEmail($appointment);

        // Add to Google Calendar (optional - this needs setup)
        //$this->addToGoogleCalendar($appointment);//

        return redirect()->back()->with('success', 'Your appointment has been scheduled.');
    }

    // Send reminder email
    private function sendReminderEmail($appointment)
    {
        $reminderTime = Carbon::parse($appointment->appointment_time)->subDay();

        if (Carbon::now()->greaterThanOrEqualTo($reminderTime)) {
            // Send the reminder email using the AppointmentReminder Mailable
            Mail::to($appointment->email)->send(new AppointmentReminder($appointment));
        }
    }
    private function addToGoogleCalendar($appointment)
    {
        $googleService = new \Google_Service_Calendar($this->getGoogleClient());
        
        // Create event
        $event = new \Google_Service_Calendar_Event([
            'summary' => $appointment->reason,
            'start' => [
                'dateTime' => $appointment->appointment_time,
                'timeZone' => 'Europe/Amsterdam',
            ],
            'end' => [
                'dateTime' => Carbon::parse($appointment->appointment_time)->addHour(),
                'timeZone' => 'Europe/Amsterdam',
            ],
        ]);
        
        $googleService->events->insert('primary', $event);
    }

    private function getGoogleClient()
    {
        $client = new \Google_Client();
        $client->setAuthConfig(storage_path('app/google_credentials.json'));
        $client->addScope(\Google_Service_Calendar::CALENDAR);
        return $client;
    }
}
