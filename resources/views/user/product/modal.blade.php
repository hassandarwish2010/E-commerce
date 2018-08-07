<div id="Quikviewmodal-{{ $product->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content" style="margin-left:-10em; width:60em">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
            <div class="p_content">
                    <input type="text" class="form-control" id="id" value="{{ $product->id }}" >
                <div class="row">
                      <h4 class="text-left colmain"> MEN T_SHERT</h4>
                      <div class="col-sm-4 left productslide">
                                <div class="mySlides">
                                    <div class="numbertext">1 / 6</div>
                                    <img src="{{asset('img/dress.jpg')}}" style="width:100%">
                                </div>

                                

                                    
                                <a class="prev" onclick="plusSlides(-1)">❮</a>
                                <a class="next" onclick="plusSlides(1)">❯</a>

                                <div class="caption-container">
                                    <p id="caption"></p>
                                </div>

                                <div class="row">
                                    <div class="column">
                                    <img class="demo cursor" src="{{asset('img/dress.jpg')}}" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                                    </div>
                                 
                                </div>
                               

                      </div>
            
                      <div class="col-sm-4 cente ctr">
                        <p class='popprise text-left'>225 EGY <p>
                        <p class="popdetails text-left"> details<p>
                        <hr>
                        <h6 class="text-left popprise">size:</h6>
                        <div>
                          <span class="btn btn-primary size"> M </span>
                        
                        </div>
                        <hr>
                        <p class="text-left popdetails">Color</p>
                        <div>
                          <span class="redd"></span>
                          <span class="bluee"></span>
                        </div>
                        <hr>
                        <p class="text-left prodmain popprise">PRODUCT INFORMATION:</p>
                        <ul class="list text-justify ulsize">
                          <li >First item</li>
                          <li>Second item</li>
                        </ul>
                      </div>
                      <div class="col-sm-4 right">
                        <div class="place">
                          <p class="text-left small">
                            shiped to <span> cairo </span>(<a href="#">change</a>)
                          </p>
                          <p class="text-left small"> deliverd at </p>
                        </div>
                        <a href="#" class="btn btn-success addtocart"> ADD TO CART</a>
                        <p class="text-left small "> Sold BY :</p>
                      </div>
                      <!--......... end right.......-->
                  </div> 
                         <!--......... end row.......-->
                <!--................-->
              </div>
           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>

