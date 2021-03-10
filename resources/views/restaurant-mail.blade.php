<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <h1>Ciao {{ $name }}!</h1>
            <h3>Grazie per aver usato il nostro servizio di DeliverBoo!</h3>
            <h4>Il tuo ristorante è stato creato con successo!</h4>
            <h4>Ecco un riepilogo dei dati del tuo ristorante</h4>
            <ul>
                <li>Nome Ristorante: {{ $restaurantName }}</li>
                <li>Indirizzo: {{ $restaurantAddress }}</li>
                <li>Partita Iva: {{ $restaurantIva}}</li>
            </ul>

        </div>
    </div>
</div>






