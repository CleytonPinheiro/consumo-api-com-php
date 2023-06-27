<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro pedido</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <!-- <?php 
        session_start();
        
        if(isset($_SESSION['modalShow'])) {
            include './pages/modal.php';
            `<iframe src="" frameborder="0"></iframe>`;
        }    
    ?> -->
    <main class="content-main d-flex">
        <img src="assets/bg.jpg" alt="Imagem plano fundo" />       
            
            <h3>CADASTRAR PEDIDO</h3>

            <div class="d-flex flex-direction-column">
                <label for="altura" class="label">Altura * </label>
                <input type="number" class="field " id="altura" name="height" placeholder="Altura (cm)" required />
            </div>

            <div class="d-flex flex-direction-column">
                <label for="profundidade" class="label">Profundidade * </label>
                <input type="number" class="field" id="profundidade" name="length" placeholder="Profundidade (cm)" required />
            </div>

            <div class="d-flex flex-direction-column">
                <label for="marca" class="label">Marca *</label>
                <input type="number" class="field" id="marca" name="brand" placeholder="Marca/Fabricante" required />
            </div>

                 
           
    </main>    
</body>
</html>