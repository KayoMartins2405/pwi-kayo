<?php include("estrutura/cabecalho.php") ;?>

</section>   
        <h1> Contato </h1>
</section> 

<section>   
 <form class= form_contato>


<div>
 <div></div><label >Nome: </label></div>           
<input type="text"class=tx placeholder="Digite seu nome: "/>   
</div>

<div>
<div></div><label >Gênero: </label></div>           
<input type="radio" name="rGenero" /> Masculino
<input type="radio" name="rGenero"/> Feminino
</div>

<div>
<div><label >E-mail: </label></div>           
<input type="email"class=tx placeholder="Digite seu E-mail: "/>
</div>

<div>
<div><label >Assunto: </label></div>           
<input type="text"class=tx placeholder="Digite seu assunto: "/>
</div>


<div><label >Mensagem: </label></div>  
<textarea placeholder="Digite seu Mensagem: "></textarea>

<input type="submit" value="enviar" />

</form>

</section>   

<?php include("estrutura/rodape.php"); ?>
