<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $country = $_POST['countryForm'] ?? '';
    
    $visaInfo = [
        "USA" => "Visa required for most applicants.",
        "Canada" => "Visa required unless you have an eTA.",
        "India" => "Visa required before travel.",
        "UK" => "Visa depends on the duration of stay.",
        "Australia" => "eVisa available for eligible travelers."
    ];
    
    if (!empty($country) && isset($visaInfo[$country])) {
        echo $visaInfo[$country];
    } else {
        echo "Invalid country selection.";
    }
}
?>