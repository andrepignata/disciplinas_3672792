<form method="POST" action="/disciplinas">
	{{csrf_field()}}
	Nome: <input type="text" name="titulo">	
	Ementa: <textarea name="ementa"></textarea>
	<button type="submit">Salvar</button>

</form>