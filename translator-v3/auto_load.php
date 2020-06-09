<?php

// YOUR_SECRET_KEY 
const KEY = "";

// YOUR_LOCATION 
const LOCATION = "";

// Endpoint translator global
const ENPOINT = "https://api.cognitive.microsofttranslator.com";

// Api version v.3
const PATH = "/translate?api-version=3.0&to=";

// Language that will be generated the translation
const LANGUAGE_TO = "en";

// Class translator
require_once  "api/Translator.php";
