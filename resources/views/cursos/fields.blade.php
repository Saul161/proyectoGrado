<div class="row">
  <div class="col">
    <label for="cur_titulo" class="form-label text-danger">Titulo el curso</label>
    <input  type="text" class="form-control" id="cur_titulo" value="{{ isset($curso)?$curso->cur_titulo:'' }}" name="cur_titulo" placeholder="Escriba" aria-label="First name">
    <label for="cur_descripcion" class="form-label text-danger">Descripcion el curso</label>
    <input  type="text" class="form-control" id="cur_descripcion"  value="{{ isset ($curso)?$curso->cur_descripcion:'' }}" name="cur_descripcion" placeholder="Escriba" aria-label="First name">  
    <label for="cur_grupo" class="form-label text-danger">Grupo el curso</label>
    <input  type="text" class="form-control" id="cur_grupo"  value="{{ isset($curso)?$curso->cur_grupo:'' }}" name="cur_grupo" placeholder="Escriba" aria-label="First name">
   </div>
   
   <div class="container">
    <br>
   <button type="submit" class="btn btn-info dropdown-primary  text-white"  >Guardar</button>
   </div>
</div>
