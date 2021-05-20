@extends('layouts.public')

@section('title','Home')

@section('content')

    

        
                <div id="tooplate_sidebar">
                    <div class="sb_box">
                        <h3>CATEGORIE</h3>
                        <p>EVENTO 1</p>
                        <p>EVENTO 2</p>
                        
                    </div>

                </div> <!-- end of sidebar -->
             
           
             <div id="tooplate_content">
                 @isset($event)
                 
              <h2>{{ $event->nomeEvento }}</h2>
                    
               <img style="float: left" src="images/event/{{ $event->image }}" alt="{{ $event->image }}" />
              <div class="latofoto1">                  
               <p>Data:{{ $event->dataOra }}</p>
                   <br></br>
              <p>Prezzo:{{ $event->prezzo }}</p>
                  <br></br>
                   <p>Biglietti disponibili: {{ $event->bigliettiDisponibili }} </p>
                     <br></br>
                    
                 </div>
                   
            <div class="sottofoto">
                
                    
            <p>{{ $event->descrizione}}</p>
               </div>
              <br></br>
                   
                    
                
                    
             <div style="float: left">
             <iframe src="{{ $event->luogo}}" width=250 height=150></iframe>
             </div>
                    
              <p class="latofoto1"> come raggiungerci
               <br></br> 
                
                       
              <p>{{ $event->raggiungere}}</p>
                    
               <div class="cleaner h20"></div>
                   
              <br class="cleaner" />
               <hr></hr>
               @endisset()
             </div>
     	
 
@endsection
