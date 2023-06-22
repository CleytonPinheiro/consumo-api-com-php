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
    <main class="content-form d-flex">
        <img src="assets/bg.jpg" alt="Imagem plano fundo" />

        <form action="./scripts/index.php" class="form d-flex" method="post">
            
            <h3>CADASTRAR PEDIDO</h3>

            <div class="d-flex flex-direction-column">
                <label for="sku" class="label">SKU</label>
                <input type="text" name="sku" class="field" id="sku" placeholder="SKU (opcional)" />
            </div>

            <div class="d-flex flex-direction-column">
                <label for="status" class="label">Status *</label>
                <select id="status" name="status" class="field" required>
                    <option value="enabled">Ativo</option>
                    <option value="disabled">Desativo</option>
                </select>
            </div>           

            <div class="d-flex flex-direction-column">
                <label for="nbm" class="label">NBM</label>
                <input type="number" class="field" id="nbm" name="nbm" placeholder="NBM (opcional)" />
            </div>
            
            <div class="d-flex flex-direction-column">
                <label for="produto" class="label">Título do produto *</label>
                <input type="text" class="field" id="produto" name="name" placeholder="Produto" required/>
            </div>

            <div class="d-flex flex-direction-column">
                <label for="descricao" class="label">Descrição * </label>
                <input type="text" class="field" id="descricao" name="description" placeholder="Descrição do produto" required/>  
            </div>

            <div class="d-flex flex-direction-column">
                <label for="valor" class="label">Valor venda *</label>
                <input type="number" class="field" id="valor" name="price" placeholder="Valor venda" required/>
            </div>

            <div class="d-flex flex-direction-column">
                <label for="promocional" class="label">Valor promocional *</label>
                <input type="number" class="field" id="promocional" name="promotional_price" placeholder="Valor promocional" required/>
            </div>

            <div class="d-flex flex-direction-column">
                <label for="custo" class="label">Custo *</label>
                <input type="number" class="field" id="custo" name="cost" placeholder="Custo" required/>
            </div>

            <div class="d-flex flex-direction-column">
                <label for="peso" class="label">Peso bruto (kg) *</label>
                <input type="number" class="field " id="peso" name="weight" placeholder="Peso em (kg)" required/>
            </div>

            <div class="d-flex flex-direction-column">
                <label for="largura" class="label">Largura * </label>
                <input type="number" class="field " id="largura" name="width" placeholder="Largura (cm)" required />
            </div>

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

            <div class="d-flex flex-direction-column">
                <label for="modelo" class="label">Modelo</label>
                <input type="number" class="field " id="modelo" name="model" placeholder="Modelo (opcional)"/>
            </div>
            
            <div class="d-flex flex-direction-column">
                <label for="genero" class="label">Gênero</label>
                <input type="number" class="field " id="genero" name="gender" placeholder="Gênero (opcional)"/>
            </div>

            <div class="d-flex flex-direction-column">
                <label for="volume" class="label">Volume</label>
                <input type="number" class="field " id="volume" name="volumes" placeholder="Volume (opcional)"/>          
            </div>

            <div class="d-flex flex-direction-column">
                <label for="garantia" class="label">Garantia (meses) </label>
                <input type="number" class="field" id="garantia" name="warrantyTime" placeholder="Garantia (opcional)"/>          
            </div>

            <div class="d-flex flex-direction-column">
                <label for="categoria" class="label">Categoria principal </label>
                <input type="text" class="field" id="categoria" name="category" placeholder="Categoria (opcional)" />          
            </div>

            <div class="d-flex flex-direction-column">
                <label for="subcategoria" class="label">Sub Categoria </label>
                <input type="text" class="field" id="subcategoria" name="subcategory" placeholder="Sub categoria (opcional)" />    
            </div>

            <div class="d-flex flex-direction-column">
                <label for="categoriafim" class="label">Categoria final</label>
                <input type="text" class="field" id="categoriafim" name="endcategory" placeholder="Sub categoria (opcional)" />
            </div>

            <div class="d-flex flex-direction-column">
                <label for="categoriafim" class="label">Atribute</label>
                <input type="text" class="field" id="categoriafim" name="attribute[][key]" placeholder="Sub categoria (opcional)" />
            </div>

            <div class="d-flex flex-direction-column">
                <label for="categoriafim" class="label">Atribute</label>
                <input type="text" class="field" id="categoriafim" name="attribute[0][value]" placeholder="Sub categoria (opcional)" />
            </div>

            <div class="d-flex flex-direction-column">
                <label for="ref" class="label">Referência</label>
                <input type="text" class="field" id="ref" name="variations[0][ref]" placeholder="Referência (opcional)" />
            </div>

            <div class="d-flex flex-direction-column">
                <label for="ref" class="label">SKU loja </label>
                <input type="text" class="field" id="ref" name="variations[0][sku]" placeholder="SKU (opcional)" />
            </div>

            <div class="d-flex flex-direction-column">
                <label for="quantidade" class="label">Quantidade em estoque </label>
                <input type="text" class="field" id="quantidade" name="variations[0][qty]" placeholder="Quantidade estoque (opcional)" />
            </div>            

            <div class="d-flex flex-direction-column">
                <label for="ean" class="label">EAN da variação </label>
                <input type="number" class="field" id="ean" name="variations[0][ean]" placeholder="EAN da variação (opcional)" />
            </div>

            <div class="d-flex flex-direction-column">
                <label for="especificacao" class="label">Chave Especificação </label>
                <input type="number" class="field" id="especificacao" name="variations[0][specifications][][key]" placeholder="Especificação (opcional)" />
            </div>

            <div class="d-flex flex-direction-column">
                <label for="value" class="label">Valor especificação </label>
                <input type="number" class="field" id="value" name="variations[0][specifications][0][value]" placeholder="Especificação (opcional)" />
            </div>

            <div class="d-flex input-img">
                <label for="img" class="label label-img">Enviar fotos </label>
                <input type="file" class="field d-flex" id="img" name="variations[0][images][0]"  accept="image/*" multiple/>
            </div>

            <div class="form-group-btn d-flex">
                <input type="reset" class="btn-action" value="Cancelar" />
                <input type="submit" class="btn-action" value="Enviar" /> 
            </div>

            <iframe src="./pages/modal.php" frameborder="0"></iframe>

            <div class="wrapper ">
                    <?php require './pages/modal.php';
                    
                        "<a href="#demo-modal">Abrir modal</a>"
                    ?>                
            </div>                
        </form>       
    </main>    
</body>
</html>