<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-semibold mb-4 text-white">Boek een Afspraak</h1>

    @if(session('success'))
        <div class="bg-green-500 text-white p-4 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('appointments.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="name" class="text-white">Naam</label>
            <input type="text" name="name" id="name" class="w-full p-2 rounded" required>
        </div>
        <div>
            <label for="email" class="text-white">E-mail</label>
            <input type="email" name="email" id="email" class="w-full p-2 rounded" required>
        </div>
        <div>
            <label for="reason" class="text-white">Reden voor Bezoek</label>
            <input type="text" name="reason" id="reason" class="w-full p-2 rounded" required>
        </div>
        <div>
            <label for="appointment_time" class="text-white">Afspraak Tijd</label>
            <input type="datetime-local" name="appointment_time" id="appointment_time" class="w-full p-2 rounded" required>
        </div>

        <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded">Afspraak Maken</button>
    </form>

    <div id="calendar" class="mt-8"></div>
</div>

<script src="{{ mix('js/app.js') }}"></script>
<script>
    // Initialize FullCalendar for the frontend
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            dateClick: function(info) {
                document.getElementById('appointment_time').value = info.dateStr;
            }
        });
        calendar.render();
    });
</script>
