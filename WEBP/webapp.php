<html>
<head><title>form aplication</title>

<body>
<div class="row">
  <div class="col">
    name<input type="text" class="form-control" placeholder="First name" aria-label="First name">
  </div>
</div>
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  
  <div class="col-md-4">
    <label for="inputState" class="form-label">course</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>mca</option>
     <option>msc</option>
     <option>m com</option>
    </select>
  </div>
  
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">submit</button>
  </div>
</form>
</head>
</html>
