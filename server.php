<?php
// First, run 'composer require pusher/pusher-php-server'
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher\Pusher(
    "816a50664ec1af4441bc", // Replace with 'key' from dashboard
    "abd180fe1637fd69bac2", // Replace with 'secret' from dashboard
    "1760129", // Replace with 'app_id' from dashboard
    array(
        'cluster' => 'eu' // Replace with 'cluster' from dashboard
)
);
// Trigger a new random event every second. In your application,
// you should trigger the event based on real-world changes!
for ($i = 0; $i < 10; $i++) {

    {
        $pusher->trigger('latrembo', 'new-linea', array(
            rand(6, 16),
            rand(6, 16),
            rand(6, 16),
            rand(6, 16),
            rand(6, 16),
            rand(6, 16),
            rand(6, 16),
            rand(6, 16),
            rand(6, 16),
            rand(6, 16),
            rand(6, 16)
        ));
        sleep(1);
    }
}