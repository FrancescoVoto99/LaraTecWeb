<?php

namespace App\Models;

use App\Models\Resources\FAQ;

class FAQs {

  
    // Estrae i prodotti della categoria/e $catId (tutti o solo quelli in sconto), eventualmente ordinati
    public function getFAQ() {
       // da rivedere jhjhjhh
        $faq = FAQ::where('id','!=',0)->get();
        return $faq;
    }

}