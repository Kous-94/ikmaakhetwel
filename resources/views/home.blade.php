<x-guest-layout>
    <div class="container mx-auto px-4">
        <!-- Banner Section -->
        <section class="relative bg-cover bg-center h-[400px] flex items-center justify-center text-white"
            style="background-image: url('{{ asset('images/banner.jpg') }}'); background-color: rgb(17 24 39 / var(--tw-bg-opacity));">
            <div class="absolute inset-0 bg-black opacity-40"></div> <!-- Dark overlay to improve text contrast -->
            <div class="text-center relative z-10">
                <h1 class="text-4xl font-bold md:text-5xl drop-shadow-lg">Welkom bij UNeed-IT</h1>
                <p class="mt-2 text-lg md:text-xl">Ontdek onze uitgebreide diensten voor betrouwbare laptop- en PC-reparaties en upgrades</p>
            </div>
        </section>

        <!-- Introduction Section -->
        <section class="mt-12 text-center">
            <h2 class="text-3xl font-semibold text-white mb-4">Waarom Kiezen voor UNeed-IT?</h2>
            <p class="text-lg text-gray-300 max-w-3xl mx-auto">
                Bij UNeed-IT bieden we hoogwaardige laptop- en PC-reparaties, maatwerk en upgrades. Of je nu te maken hebt met hardwareproblemen, softwarestoringen of gewoon een upgrade nodig hebt, wij staan voor je klaar. Ons team van ervaren technici levert snelle, betrouwbare en betaalbare oplossingen op maat van jouw behoeften.
            </p>
        </section>

        <!-- Services Section -->
        <section class="mt-12">
            <h2 class="text-3xl font-semibold text-white text-center mb-8">Onze Diensten</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-white">
                    <h3 class="text-xl font-semibold text-gray-200 mb-4">Laptop Reparaties</h3>
                    <p class="text-gray-300">We bieden professionele laptop reparatiediensten om elk probleem met je laptop op te lossen, van hardware tot software reparaties. Onze deskundige technici werken snel om je laptop weer in werking te krijgen.</p>
                </div>
                <!-- Service 2 -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-white">
                    <h3 class="text-xl font-semibold text-gray-200 mb-4">PC Upgrades</h3>
                    <p class="text-gray-300">Upgrade je PC met de nieuwste hardware en software om de prestaties voor werk of gaming te verbeteren. Of je nu een snellere processor, meer RAM of een nieuwe grafische kaart nodig hebt, wij kunnen je helpen.</p>
                </div>
                <!-- Service 3 -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-white">
                    <h3 class="text-xl font-semibold text-gray-200 mb-4">Maatwerk Builds</h3>
                    <p class="text-gray-300">Op zoek naar een custom PC build? We ontwerpen en assembleren computers die volledig zijn afgestemd op jouw specifieke behoeften en voorkeuren, of het nu voor gaming, videobewerking of zakelijk gebruik is.</p>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="mt-12 bg-gray-900 py-12">
            <h2 class="text-3xl font-semibold text-white text-center mb-6">Wat Onze Klanten Zeggen</h2>
            <div class="flex flex-col lg:flex-row items-center justify-center gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg max-w-xs mx-auto text-center">
                    <p class="text-gray-300 mb-4">"UNeed-IT heeft mijn laptop gerepareerd toen deze niet meer opstartte. Hun service was snel, betaalbaar en effectief. Zeer aan te raden!"</p>
                    <p class="font-semibold text-gray-200">Jane Doe</p>
                    <p class="text-gray-400">Tevreden Klant</p>
                </div>
                <!-- Testimonial 2 -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg max-w-xs mx-auto text-center">
                    <p class="text-gray-300 mb-4">"Ik heb een custom PC laten bouwen door UNeed-IT voor gaming. Het werkt perfect. Geweldige service en oog voor detail."</p>
                    <p class="font-semibold text-gray-200">John Smith</p>
                    <p class="text-gray-400">Gaming Enthousiast</p>
                </div>
                <!-- Testimonial 3 -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg max-w-xs mx-auto text-center">
                    <p class="text-gray-300 mb-4">"Het team van UNeed-IT heeft mijn desktop geüpgraded voor werk en nu is hij sneller dan ooit. Ik ben erg onder de indruk van hun professionaliteit."</p>
                    <p class="font-semibold text-gray-200">Alice Johnson</p>
                    <p class="text-gray-400">Zakelijk Professional</p>
                </div>
            </div>
        </section>

        <!-- Call-to-Action Section -->
        <section class="mt-12 bg-blue-600 text-white py-12 text-center rounded-lg">
            <h2 class="text-3xl font-semibold mb-4">Klaar om te Beginnen?</h2>
            <p class="text-lg mb-6">Of je nu een reparatie, upgrade of maatwerk build nodig hebt, wij staan voor je klaar. Neem vandaag nog contact met ons op!</p>
            <a href="{{ route('contact') }}" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold">Neem Contact Op</a>
        </section>

        <!-- Working Hours Section -->
        <section class="mt-12 bg-gray-800 text-white py-8 text-center">
            <h2 class="text-2xl font-semibold mb-4">Onze Openingstijden</h2>
            <p class="text-lg">Maandag tot en met Vrijdag: 10:00 - 17:30</p>
        </section>

        <!-- Contact Information Section -->
        <section class="mt-12 bg-gray-900 text-white py-8 text-center">
            <h2 class="text-2xl font-semibold mb-4">Contact Informatie</h2>
            <p class="text-lg">Heb je vragen of wil je meer informatie? Neem contact met ons op via de onderstaande gegevens:</p>
            <p class="mt-4">📞 Telefoon: +31 123 456 789</p>
            <p>📧 Email: info@uneed-it.nl</p>
        </section>
    </div>
</x-guest-layout>
