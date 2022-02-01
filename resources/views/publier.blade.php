<!-- create.blade.php -->

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
@extends('layouts.app')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
  .carduper{
      margin-left:350px;
      margin-right:350px;
  }
  html * {
  box-sizing: border-box;
}

p {
  margin: 0;
}

.upload {
  &__box {
    padding: 40px;
  }
  &__inputfile {
    width: .1px;
    height: .1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
  }
  
  &__btn {
    display: inline-block;
    font-weight: 600;
    color: #fff;
    text-align: center;
    min-width: 116px;
    padding: 5px;
    transition: all .3s ease;
    cursor: pointer;
    border: 2px solid;
    background-color: #4045ba;
    border-color: #4045ba;
    border-radius: 10px;
    line-height: 26px;
    font-size: 14px;
    
    &:hover {
      background-color: unset;
      color: #4045ba;
      transition: all .3s ease;
    }
    
    &-box {
      margin-bottom: 10px;
    }
  }
  
  &__img {
    &-wrap {
      display: flex;
      flex-wrap: wrap;
      margin: 0 -10px;
    }
    
    &-box {
      width: 200px;
      padding: 0 10px;
      margin-bottom: 12px;
    }
    
    &-close {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 10px;
        right: 10px;
        text-align: center;
        line-height: 10px;
        z-index: 1;
        cursor: pointer;

        &:after {
          content: '\2716';
          font-size: 10px;
          color: white;
        }
      }
  }
}

.img-bg {
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
  padding-bottom: 100%;
}
</style>


<div class="carduper">
@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <div class="card-header">
    
    Créer un Article
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="">
         @csrf
          <div class="form-group">
              <label for="titre">Titre de l'article:</label>
              <input type="text" class="form-control" name="titre" required/>
          </div>

          <div class="form-group">
              <label for="description">Description :</label>
              <textarea type="text" class="form-control" name="description" required></textarea>
          </div>
          <div class="upload__box">
          <div class="form-group">
                        <label>Photo</label>
                        <input type="file"  name="photo" class="form-control" 
                            placeholder="Choisissez une photo">
                     </div>
  <div class="upload__img-wrap"></div>
</div>
                   
                      

          </div>
          <br/>
         <center> 
           <button type="submit" class="btn btn-primary">Créer</button>
                  
        </center>
      </form>
      
  </div>
</div>
@endsection
