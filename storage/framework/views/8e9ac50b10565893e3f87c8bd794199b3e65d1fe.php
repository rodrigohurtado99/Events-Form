<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Eventos</title>

    <!-- CSS da Aplicação -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Fonte do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;1,200&display=swap" rel="stylesheet">

    <!-- Javascript JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="crossorigin="anonymous"></script>

</head>
    
<body>  
<div class="main">
    <form method="GET" action="/semanas">
        <fieldset>
            <h2>Criação de atividades esportivas</h2>
            <div class="input-types">
                <label for="#" class="description">Evento</label>
                <input type="text" class="tipo-01 padd" name="tipo-01" autofocus required> 
                <label for="#" class="description">Descrição</label>
                <textarea class="tipo-02 padd" rows="3" name="tipo-02"  cols="21" style="resize: none;" required></textarea>
            </div>
            <div class="grid-right">
            <div class="date">
                <label class="description">De:</label>
                <!-- SÓ IRA VALER O ANO ATUAL!! -->
                <input type="date" name='data'  class="date-css" min="2022-01-01" max="2022-12-31" required>
            </div>
            <div class="choice">
                <label><input type="radio" value="Não se repete" name="r1" class="ativo" checked>Não se repete<span class="check"></span></label>
                <label><input type="radio" value="Repetir" name="r1" class="ativo">Repetir<span class="check"></span></label>
                <label class="range-label">Intervalo de semanas:<span id="texto">1</span>
                    <input type="range" class="range-type" min="1" max="5" value="1" name="intervalo" required>
                </label>
        </div>
            </div>
            <div class="select-types">
                <div class="select-01">
                <label for="#" class="description">Início:</label>
                <select  class="padd description" name="horario-inicio">
                    <option value="Selecione">Selecione</option>
                    <option value="09:00">09:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>
                    <option value="18:00">18:00</option>
                    <option value="19:00">19:00</option>
                    <option value="20:00">20:00</option>
                </select>
            </div>
            <div class="select-02">
                <label for="#" class="description">Término:</label>
                <select class="padd description" name="horario-termino" required>
                    <option value="Selecione">Selecionar</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>
                    <option value="18:00">18:00</option>
                    <option value="19:00">19:00</option>
                    <option value="20:00">20:00</option>
                </select>
            <div class="btn-salvar">
                <label for="#">
                    <input type="submit" value="Salvar" class="btn-type">
                </label>
            </div>
            </div>
            </div>
        </fieldset>
    </form>
</div>
<script src="/js/js.js"></script>
</body>
</html><?php /**PATH C:\Arquivos\example-app\resources\views/formulario.blade.php ENDPATH**/ ?>