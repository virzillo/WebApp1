<div class="col-lg-4 col-xl-3">
    <div class="selected_filter_widget style3 mb30">
          <div id="accordion" class="panel-group">
            <div class="panel">
                @foreach($categories as $category)
                <div class="panel-heading">
                    <h4 class="panel-title">
                      <a href="#panelBodySoftware" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">{{ucfirst($category->titolo)}}</a>
                  </h4>
                </div>
                @if($category->children)
              <div id="panelBodySoftware" class="panel-collapse collapse show">
                  <div class="panel-body">
                    @foreach($category->children as $child)
                      <div class="ui_kit_checkbox">

                          <div class="custom-control custom-checkbox">
                           <input type="checkbox" class="custom-control-input" name="categoria" value="{{$child->titolo}}" id="{{$child->titolo}}_{{$child->id}}">
                              <label class="custom-control-label" for="{{$child->titolo}}_{{$child->id}}">  {{ ucfirst($child->titolo) }} </label>
                          </div>

                          {{-- <a class="color-orose" href="#"><span class="fa fa-plus pr10"></span> See More</a> --}}
                      </div>

                      @endforeach
                  </div>
              </div>
              @endif
                @endforeach

            </div>
        </div>
    </div>
    <div class="selected_filter_widget style3">
          <div id="accordion" class="panel-group">
            <div class="panel">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                        <a href="#panelBodyAuthors" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Provincia</a>
                    </h4>
                  </div>
                <div id="panelBodyAuthors" class="panel-collapse collapse show">
                    <div class="panel-body">
                        <div class="cl_skill_checkbox">
                            <div class="content ui_kit_checkbox style2 text-left"> <?php $i=0; ?>
                                @foreach ($citta as $item)
                                <?php $i++; ?>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="provincia" value="{{$item->provincia}} " id="{{$item->provincia . $i}}">
                                    <label class="custom-control-label" for="{{$item->provincia . $i}}">{{$item->provincia}} <span class="float-right"></span></label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="selected_filter_widget style3 mb30">
          <div id="accordion" class="panel-group">
            <div class="panel">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                        <a href="#panelBodyPrice" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Price</a>
                    </h4>
                  </div>
                <div id="panelBodyPrice" class="panel-collapse collapse show">
                    <div class="panel-body">
                        <div class="ui_kit_whitchbox">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                <label class="custom-control-label" for="customSwitch1">Paid </label>
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                <label class="custom-control-label" for="customSwitch2">Free</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="selected_filter_widget style3 mb30">
          <div id="accordion" class="panel-group">
            <div class="panel">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                        <a href="#panelBodySkills" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Servizi</a>
                    </h4>
                  </div>
                <div id="panelBodySkills" class="panel-collapse collapse show">
                    <div class="panel-body">
                        <div class="ui_kit_checkbox">
                            @foreach ($services as $service)
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="servizio" value="{{$service->titolo}} " id="{{$service->titolo}}_{{$service->id}} ">
                                <label class="custom-control-label" for="{{$service->titolo}}_{{$service->id}} ">{{$service->titolo}} <span class="float-right"></span></label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="selected_filter_widget style3">
          <div id="accordion" class="panel-group">
            <div class="panel">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                        <a href="#panelBodyRating" class="accordion-toggle link fz20 mb15" data-toggle="collapse" data-parent="#accordion">Rating</a>
                    </h4>
                  </div>
                <div id="panelBodyRating" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="ui_kit_checkbox style2">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck80">
                                <label class="custom-control-label" for="customCheck80">Show All <span class="float-right">(03)</span></label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck82">
                                <label class="custom-control-label" for="customCheck82">1 star and higher <span class="float-right">(15)</span></label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck83">
                                <label class="custom-control-label" for="customCheck83">2 star and higher <span class="float-right">(126)</span></label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck84">
                                <label class="custom-control-label" for="customCheck84">3 star and higher <span class="float-right">(1,584)</span></label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck85">
                                <label class="custom-control-label" for="customCheck85">4 star and higher <span class="float-right">(34)</span></label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck86">
                                <label class="custom-control-label" for="customCheck86">5 star and higher <span class="float-right">(58)</span></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="selected_filter_widget style4">
        <span class="float-left"><img class="mr20" src="{{url('/website/images/resource/2.png')}}" alt="2.png"></span>
        <h4 class="mt15 fz20 fw500">Not sure?</h4>
        <br>
        <p>Every course comes with a 30-day money-back guarantee</p>
    </div>
</div>


