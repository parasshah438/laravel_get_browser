@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!



           
                  <table class="table table-bordered">
                    
                      <tr>
                        <th>Browser</th>
                        <th>OS</th>
                        <th>Device</th>
                      </tr>
                   
                    
                      <tr>
                        @if($browser::isChrome())
                            <td>Chrome<td>  
                        @elseif($browser::isFirefox())
                            <td>Firefox</td> 
                        @elseif($browser::isOpera())
                            <td>Opera</td> 
                        @elseif($browser::isSafari())
                            <td>Safari</td>
                        @elseif($browser::isIE())
                            <td>Internet Explorer</td>
                        @elseif($browser::isEdge())
                            <td>Microsoft Edge</td>        
                        @else
                            <td>Unknown</td>                        
                        @endif 

                        <td>{{$browser::platformName()}}</td>
                        
                        @if($browser::isDesktop())
                            <td>Desktop</td>    
                        @elseif($browser::isMobile())
                            <td>Mobile</td>
                        @elseif($browser::isTablet())
                            <td>Tablet</td>    
                        @else
                            <td>Unknown</td> 
                        @endif    

                      </tr>
                     
                   
                  </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
