
<div class="row">
<!-- start card -->
<div class="col-xs-12 col-md-8 col-lg-8 col-sm-8 col-xxl-8 ">
  <div class="card card-cuadro">
  <div class="cardtitle">Main principal de la App</div>
    <div class="card-body">
    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore qui voluptatum excepturi molestias.
    Natus quasi quos recusandae perspiciatis ipsum. Quo possimus debitis, quam natus expedita perferendis
    optio earum beatae fugiat? </p>

    <p>
      <?php
        // Requerimos el archivo
        require("inc/php/functions.php");
        // Creamos la instancia nueva
        $mysql = new Database();
        // Creamos la conexion nueva
        $mysql->CreateConnection();
       ?>
    </p>

    </div>
  </div>
</div>
<!-- end card -->

<!-- start card -->
<div class="col-xs-12 col-md-4 col-lg-4 col-sm-4 col-xxl-4 ">
 <div class="card card-cuadro">
 <div class="cardtitle">Latest Projects</div>
   <div class="card-body">
    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum quos suscipit exercitationem
    non id doloribus officia reprehenderit omnis quod! Deleniti expedita </p>
   </div>
 </div>
</div>
<!-- end card -->
</div><!-- row -->

<!-- table card -->
<div class="row">
  <div class="col-xs-12 col-md-6 col-lg-6 col-sm-6 col-xxl-6">
    <div class="card card-cuadro">
      <div class="cardtitle">
        Tabla Original
      </div>
      <div class="card-body">
        <table class="table">
                      <thead>
                        <tr>
                          <th style="width:40%;">Name</th>
                          <th style="width:25%">Phone Number</th>
                          <th class="d-none d-md-table-cell" style="width:25%">Date of Birth</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Ashley Briggs</td>
                          <td>864-348-0485</td>
                          <td class="d-none d-md-table-cell">June 21, 1961</td>
                          <td class="table-action">
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon></svg></a>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
                          </td>
                        </tr>
                        <tr>
                          <td>Carl Jenkins</td>
                          <td>914-939-2458</td>
                          <td class="d-none d-md-table-cell">May 15, 1948</td>
                          <td class="table-action">
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon></svg></a>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
                          </td>
                        </tr>
                        <tr>
                          <td>Bertha Martin</td>
                          <td>704-993-5435</td>
                          <td class="d-none d-md-table-cell">September 14, 1965</td>
                          <td class="table-action">
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon></svg></a>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
                          </td>
                        </tr>
                        <tr>
                          <td>Stacie Hall</td>
                          <td>765-382-8195</td>
                          <td class="d-none d-md-table-cell">April 2, 1971</td>
                          <td class="table-action">
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon></svg></a>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
                          </td>
                        </tr>
                        <tr>
                          <td>Amanda Jones</td>
                          <td>202-672-1407</td>
                          <td class="d-none d-md-table-cell">October 12, 1966</td>
                          <td class="table-action">
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon></svg></a>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-md-6 col-lg-6 col-sm-6 col-xxl-6">
    <div class="card card-cuadro">
      <div class="cardtitle">
        Tabla Original
      </div>
      <div class="card-body">
        <table class="table">
  										<thead>
  											<tr>
  												<th style="width:40%;">Name</th>
  												<th style="width:25%">Phone Number</th>
  												<th class="d-none d-md-table-cell" style="width:25%">Date of Birth</th>
  												<th>Actions</th>
  											</tr>
  										</thead>
  										<tbody>
  											<tr>
  												<td>Ashley Briggs</td>
  												<td>864-348-0485</td>
  												<td class="d-none d-md-table-cell">June 21, 1961</td>
  												<td class="table-action">
  													<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon></svg></a>
  													<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
  												</td>
  											</tr>
  											<tr>
  												<td>Carl Jenkins</td>
  												<td>914-939-2458</td>
  												<td class="d-none d-md-table-cell">May 15, 1948</td>
  												<td class="table-action">
  													<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon></svg></a>
  													<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
  												</td>
  											</tr>
  											<tr>
  												<td>Bertha Martin</td>
  												<td>704-993-5435</td>
  												<td class="d-none d-md-table-cell">September 14, 1965</td>
  												<td class="table-action">
  													<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon></svg></a>
  													<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
  												</td>
  											</tr>
  											<tr>
  												<td>Stacie Hall</td>
  												<td>765-382-8195</td>
  												<td class="d-none d-md-table-cell">April 2, 1971</td>
  												<td class="table-action">
  													<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon></svg></a>
  													<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
  												</td>
  											</tr>
  											<tr>
  												<td>Amanda Jones</td>
  												<td>202-672-1407</td>
  												<td class="d-none d-md-table-cell">October 12, 1966</td>
  												<td class="table-action">
  													<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 align-middle"><polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon></svg></a>
  													<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
  												</td>
  											</tr>
  										</tbody>
  									</table>
      </div>
    </div>
  </div>

</div>
<!-- termina table card -->

<!-- start card -->
<div class="row">
<div class="col-xs-12 col-ms-12 col-lg-12 col-sm-12 col-xxl-12 ">
  <div class="card card-cuadro">
    <div class="cardtitle">Formulario Básico</div>
    <div class="card-body">
      <form>
        <div class="form-group">
          <label class="form-label" for="">Nombre completo</label>
          <input type="text" class="form-control" placeholder="Nombre completo">
        </div>
        <div class="form-group">
          <label class="form-label" for="">Dirección de correo</label>
          <input type="mail" class="form-control" placeholder="Correo electronico">
        </div>
        <div class="form-group">
          <label class="form-label" for="">Descripción</label>
          <textarea class="form-control" rows="1" placeholder="Descripción"></textarea>
        </div>
        <div class="form-group">
          <input type="file">
          <small class="form-text text-muted">No se ha adjuntado ningun archivo</small>
        </div>
        <div class="form-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        </div>
        <div class="form-group">
        <label class="check-custom">Primary
          <input type="checkbox" checked="checked">
          <span class="checkmark"></span>
        </label>
        <label class="check-custom">Info
          <input type="checkbox" checked="checked">
          <span class="checkmark checkmark-info"></span>
        </label>
        <label class="check-custom">Danger
          <input type="checkbox" checked="checked">
          <span class="checkmark checkmark-danger"></span>
        </label>
        <label class="check-custom">Warning
          <input type="checkbox" checked="checked">
          <span class="checkmark checkmark-warning"></span>
        </label>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<!-- end card -->






<div class="row">

  <div class="col-xs-12 col-md-6 col-lg-6 col-sm-6 col-xxl-6">
    <div class="card card-cuadro">
      <div class="cardtitle">Tipo de  Alertas</div>
      <div class="card-body">
        <div class="alert alert-success">
          Alerta Succes.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="alert alert-info">
          Alert Information.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="alert alert-warning">
          Alerta warning.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="alert alert-danger">
          Alerta Danger.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="col-xs-12 col-md-6 col-lg-6 col-sm-6 col-xxl-6">
    <div class="card card-cuadro">
      <div class="cardtitle">Buttons</div>
      <div class="card-body">
        <div class="form-group">
          <button type="button" class="btn " name="button">Button</button>
          <button type="button" class="btn btn-success" name="button">Success</button>
          <button type="button" class="btn btn-info" name="button">Information</button>
          <button type="button" class="btn btn-warning" name="button">Warning</button>
          <button type="button" class="btn btn-danger" name="button">Danger</button>
          <button type="button" class="btn btn-dark" name="button">Dark</button>
          <button type="button" class="btn btn-light" name="button">Light</button>
        </div>
        <div class="form-group">
          <button type="button" class="btn " name="button"> <i class="fa fa-file"></i> Button</button>
          <button type="button" class="btn btn-success" name="button"> <i class="fa fa-check"></i> Success</button>
          <button type="button" class="btn btn-info" name="button"> <i class="fa fa-info"></i> Information</button>
          <button type="button" class="btn btn-warning" name="button"> <i class="fa fa-exclamation"></i> Warning</button>
          <button type="button" class="btn btn-danger" name="button"> <i class="fa fa-times"></i> Danger</button>
          <button type="button" class="btn btn-dark" name="button"> <i class="fa fa-globe"></i> Dark</button>
          <button type="button" class="btn btn-light" name="button"> <i class="fa fa-save"></i> Light</button>
        </div>
        <div class="form-group">
          <button type="button" class="btn " name="button"> <i class="fa fa-file"></i> </button>
          <button type="button" class="btn btn-success" name="button"> <i class="fa fa-check"></i> </button>
          <button type="button" class="btn btn-info" name="button"> <i class="fa fa-info"></i> </button>
          <button type="button" class="btn btn-warning" name="button"> <i class="fa fa-exclamation"></i> </button>
          <button type="button" class="btn btn-danger" name="button"> <i class="fa fa-times"></i> </button>
          <button type="button" class="btn btn-dark" name="button"> <i class="fa fa-globe"></i> </button>
          <button type="button" class="btn btn-light" name="button"> <i class="fa fa-save"></i> </button>
        </div>
        <div>
											<button class="btn mb-1 btn-facebook"><svg class="svg-inline--fa fa-facebook fa-w-14 align-middle my-1" aria-hidden="true" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M448 56.7v398.5c0 13.7-11.1 24.7-24.7 24.7H309.1V306.5h58.2l8.7-67.6h-67v-43.2c0-19.6 5.4-32.9 33.5-32.9h35.8v-60.5c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9h-58.4v67.6h58.4V480H24.7C11.1 480 0 468.9 0 455.3V56.7C0 43.1 11.1 32 24.7 32h398.5c13.7 0 24.8 11.1 24.8 24.7z"></path></svg><!-- <i class="align-middle fab my-1 fa-facebook"></i> --></button>
											<button class="btn mb-1 btn-twitter"><svg class="svg-inline--fa fa-twitter fa-w-16 align-middle my-1" aria-hidden="true" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg><!-- <i class="align-middle fab my-1 fa-twitter"></i> --></button>
											<button class="btn mb-1 btn-google"><svg class="svg-inline--fa fa-google fa-w-16 align-middle my-1" aria-hidden="true" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512" data-fa-i2svg=""><path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path></svg><!-- <i class="align-middle fab my-1 fa-google"></i> --></button>
											<button class="btn mb-1 btn-youtube"><svg class="svg-inline--fa fa-youtube fa-w-18 align-middle my-1" aria-hidden="true" data-prefix="fab" data-icon="youtube" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg><!-- <i class="align-middle fab my-1 fa-youtube"></i> --></button>
											<button class="btn mb-1 btn-vimeo"><svg class="svg-inline--fa fa-vimeo fa-w-14 align-middle my-1" aria-hidden="true" data-prefix="fab" data-icon="vimeo" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M403.2 32H44.8C20.1 32 0 52.1 0 76.8v358.4C0 459.9 20.1 480 44.8 480h358.4c24.7 0 44.8-20.1 44.8-44.8V76.8c0-24.7-20.1-44.8-44.8-44.8zM377 180.8c-1.4 31.5-23.4 74.7-66 129.4-44 57.2-81.3 85.8-111.7 85.8-18.9 0-34.8-17.4-47.9-52.3-25.5-93.3-36.4-148-57.4-148-2.4 0-10.9 5.1-25.4 15.2l-15.2-19.6c37.3-32.8 72.9-69.2 95.2-71.2 25.2-2.4 40.7 14.8 46.5 51.7 20.7 131.2 29.9 151 67.6 91.6 13.5-21.4 20.8-37.7 21.8-48.9 3.5-33.2-25.9-30.9-45.8-22.4 15.9-52.1 46.3-77.4 91.2-76 33.3.9 49 22.5 47.1 64.7z"></path></svg><!-- <i class="align-middle fab my-1 fa-vimeo"></i> --></button>
											<button class="btn mb-1 btn-dribbble"><svg class="svg-inline--fa fa-dribbble fa-w-16 align-middle my-1" aria-hidden="true" data-prefix="fab" data-icon="dribbble" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119.252 8 8 119.252 8 256s111.252 248 248 248 248-111.252 248-248S392.748 8 256 8zm163.97 114.366c29.503 36.046 47.369 81.957 47.835 131.955-6.984-1.477-77.018-15.682-147.502-6.818-5.752-14.041-11.181-26.393-18.617-41.614 78.321-31.977 113.818-77.482 118.284-83.523zM396.421 97.87c-3.81 5.427-35.697 48.286-111.021 76.519-34.712-63.776-73.185-116.168-79.04-124.008 67.176-16.193 137.966 1.27 190.061 47.489zm-230.48-33.25c5.585 7.659 43.438 60.116 78.537 122.509-99.087 26.313-186.36 25.934-195.834 25.809C62.38 147.205 106.678 92.573 165.941 64.62zM44.17 256.323c0-2.166.043-4.322.108-6.473 9.268.19 111.92 1.513 217.706-30.146 6.064 11.868 11.857 23.915 17.174 35.949-76.599 21.575-146.194 83.527-180.531 142.306C64.794 360.405 44.17 310.73 44.17 256.323zm81.807 167.113c22.127-45.233 82.178-103.622 167.579-132.756 29.74 77.283 42.039 142.053 45.189 160.638-68.112 29.013-150.015 21.053-212.768-27.882zm248.38 8.489c-2.171-12.886-13.446-74.897-41.152-151.033 66.38-10.626 124.7 6.768 131.947 9.055-9.442 58.941-43.273 109.844-90.795 141.978z"></path></svg><!-- <i class="align-middle fab my-1 fa-dribbble"></i> --></button>
											<button class="btn mb-1 btn-github"><svg class="svg-inline--fa fa-github fa-w-16 align-middle my-1" aria-hidden="true" data-prefix="fab" data-icon="github" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" data-fa-i2svg=""><path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg><!-- <i class="align-middle fab my-1 fa-github"></i> --></button>
											<button class="btn mb-1 btn-instagram"><svg class="svg-inline--fa fa-instagram fa-w-14 align-middle my-1" aria-hidden="true" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg><!-- <i class="align-middle fab my-1 fa-instagram"></i> --></button>
											<button class="btn mb-1 btn-pinterest"><svg class="svg-inline--fa fa-pinterest fa-w-16 align-middle my-1" aria-hidden="true" data-prefix="fab" data-icon="pinterest" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" data-fa-i2svg=""><path fill="currentColor" d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3.8-3.4 5-20.3 6.9-28.1.6-2.5.3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z"></path></svg><!-- <i class="align-middle fab my-1 fa-pinterest"></i> --></button>
											<button class="btn mb-1 btn-flickr"><svg class="svg-inline--fa fa-flickr fa-w-14 align-middle my-1" aria-hidden="true" data-prefix="fab" data-icon="flickr" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM144.5 319c-35.1 0-63.5-28.4-63.5-63.5s28.4-63.5 63.5-63.5 63.5 28.4 63.5 63.5-28.4 63.5-63.5 63.5zm159 0c-35.1 0-63.5-28.4-63.5-63.5s28.4-63.5 63.5-63.5 63.5 28.4 63.5 63.5-28.4 63.5-63.5 63.5z"></path></svg><!-- <i class="align-middle fab my-1 fa-flickr"></i> --></button>
											<button class="btn mb-1 btn-bitbucket"><svg class="svg-inline--fa fa-bitbucket fa-w-16 align-middle my-1" aria-hidden="true" data-prefix="fab" data-icon="bitbucket" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M23.1 32C14.2 31.9 7 38.9 6.9 47.8c0 .9.1 1.8.2 2.8L74.9 462c1.7 10.4 10.7 18 21.2 18.1h325.1c7.9.1 14.7-5.6 16-13.4l67.8-416c1.4-8.7-4.5-16.9-13.2-18.3-.9-.1-1.8-.2-2.8-.2L23.1 32zm285.3 297.3H204.6l-28.1-146.8h157l-25.1 146.8z"></path></svg><!-- <i class="align-middle fab my-1 fa-bitbucket"></i> --></button>
										</div>
      </div>
    </div>
  </div>
</div>
