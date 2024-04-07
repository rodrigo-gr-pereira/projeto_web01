
   <div id="map">
        <gmp-map center="-27.662080764770508,-48.49417495727539" zoom="14" map-id="DEMO_MAP_ID">
        <gmp-advanced-marker position="-27.662080764770508,-48.49417495727539" title="My location"></gmp-advanced-marker>
    </div>
    
   <div class="contato-container">
        <div class="center">
            <form method="post" action="">
                <input required type="text" name="nome" placeholder="Nome...">
                <div></div>
                <input required type="text" name="email" placeholder="E-mail..">
                <div></div>
                <input required type="text" name="telefone" placeholder="Telefone...">
                <div></div>
                <textarea required placeholder="Sua mensagem..." name="mensagem"></textarea>
                <div></div>
                <input type="hidden" name="identificador" value="form_contato" />
                <input type="submit" name="acao" value="Enviar">
            </form>
        </div><!--center-->
    </div><!--contato-container-->
</section>
