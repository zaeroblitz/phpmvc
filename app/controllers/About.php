<?php

class About {
    public function index($name = 'No Name', $job = 'No Job') {
        echo "Hello, my name is $name and i'm $job";
    }

    public function page() {
        echo "about/page";
    }
}