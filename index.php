<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 Atividade 4 - 13/03/2026</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
<div class="col-md-4"></div>
<div class="card bg-dark text-white"></div>
<div class="card-body"></div>
<h4 class="card-title">Sistema de Aprovação Escolar</h4>
<form action="recebeDados1.php" method="POST">
  <div class="mb-3">
    <label class="form-label">Nota Educação Física</label>
    <input type="number" step="0.1" class="form-control" name="txtNotaEducaçãoFísica">
  </div>

  <div class="mb-3">
    <label class="form-label">Nota Química</label>
    <input type="number" step="0.1" class="form-control" name="txtNotaQuímica">
  </div>
<div class="mb-3">
    <label class="form-label">Nota Biologia</label>
    <input type="number" step="0.1" class="form-control" name="txtNotaBiologia">
  </div>
  <div class="mb-3">
    <label class="form-label">Média de Frequência</label>
    <input type="number" step="0.01" class="form-control" name="txtFrequência">
  </div>
  <button type="submit" class="btn btn-primary">Calcular</button>
</form>
<div class="container mt-4">
<div class="col-md-4"></div>
<div class="card bg-dark text-white"></div>
<div class="card-body"></div>
<h4 class="card-title">Calculadora de Tarifas de Energia Elétrica</h4>
<form action="recebeDados2.php" method="POST">
<div class="mb-3">
    <label class="form-label">Tipo de Instalação do Imóvel</label>
    <select class="form-select" name="txtTipo">
      <option value="">Selecione</option>
      <option value="residencial">Residencial</option>
      <option value="comercial">Comercial</option>
      <option value="industrial">Industrial</option>
    </select>
</div>
 <div class="mb-3">
    <label class="form-label">Consumo de Energia</label>
    <input type="number" step="0.01" class="form-control" name="txtConsumo">
  </div>
  <button type="submit" class="btn btn-primary">Calcular</button>
</form>
<div class="container mt-4">
<div class="col-md-4"></div>
<div class="card bg-dark text-white"></div>
<div class="card-body"></div>
<h4 class="card-title">Sistema de Descontos para E-commerce</h4>
<form action="recebeDados3.php" method="POST">
<div class="mb-3">
    <label class="form-label">Tipo de Cliente</label>
    <select class="form-select" name="txtCategoria">
      <option value="">Selecione</option>
      <option value="clienteComum">Cliente Comum</option>
      <option value="clienteVIP">Cliente VIP</option>
      <option value="clientePremium">Cliente Premium</option>
    </select>
</div>
<button type="submit" class="btn btn-primary">Calcular</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>