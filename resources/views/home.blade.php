@extends('layouts.master')

@section('title')
    REGES | Início
@endsection

@section('content_header')

    <h1>Início</h1>
    @if ($errors->any())
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection

@section('content')

    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-7 connectedSortable ui-sortable">
                    <!-- Custom tabs (Charts with tabs)-->


                    <!--- Slider ---->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Eventos Próximos e Comunicados</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item">
                                        <img class="d-block w-100"
                                             src="https://placehold.it/900x500/39CCCC/ffffff&amp;text=I+Love+Bootstrap"
                                             alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100"
                                             src="https://placehold.it/900x500/3c8dbc/ffffff&amp;text=I+Love+Bootstrap"
                                             alt="Second slide">
                                    </div>
                                    <div class="carousel-item active">
                                        <img class="d-block w-100"
                                             src="https://placehold.it/900x500/f39c12/ffffff&amp;text=I+Love+Bootstrap"
                                             alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                   data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                   data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <!--- /slider -->


                    <!-- TO DO List -->
                    <div class="card">
                        <div class="card-header ui-sortable-handle" style="cursor: move;">
                            <h3 class="card-title">
                                <i class="ion ion-clipboard mr-1"></i>
                                To Do List
                            </h3>

                            <div class="card-tools">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item"><a href="#" class="page-link">«</a></li>
                                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">»</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <ul class="todo-list ui-sortable" data-widget="todo-list">
                                <form method="get">
                                    {{$goals = route('getallcompanygoals')}}
                                    @if(empty($goals))
                                        @foreach($goals as $goal)
                                            <li>

                                                <!-- drag handle -->
                                                <span class="handle ui-sortable-handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                                                <!-- checkbox -->
                                                <div class="icheck-primary d-inline ml-2">
                                                    <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                                    <label for="todoCheck1"></label>
                                                </div>
                                                <!-- todo text -->
                                                <span class="text">{{$goal->title}}</span>
                                                <!-- Emphasis label -->
                                                <small class="badge badge-danger"><i class="far fa-clock"></i></small>
                                                <!-- General tools such as edit or delete-->
                                                <div class="tools">
                                                    <i class="fas fa-edit"></i>
                                                    <i class="fas fa-trash-o"></i>
                                                </div>
                                            </li>
                                        @endforeach
                                    @endif
                                </form>
                            </ul>
                            <!-- <li class="done">
                 <span class="handle ui-sortable-handle">
                   <i class="fas fa-ellipsis-v"></i>
                   <i class="fas fa-ellipsis-v"></i>
                 </span>
                                 <div class="icheck-primary d-inline ml-2">
                                     <input type="checkbox" value="" name="todo2" id="todoCheck2" checked="">
                                     <label for="todoCheck2"></label>
                                 </div>
                                 <span class="text">Make the theme responsive</span>
                                 <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                                 <div class="tools">
                                     <i class="fas fa-edit"></i>
                                     <i class="fas fa-trash-o"></i>
                                 </div>
                             </li>
                             <li>
                 <span class="handle ui-sortable-handle">
                   <i class="fas fa-ellipsis-v"></i>
                   <i class="fas fa-ellipsis-v"></i>
                 </span>
                                 <div class="icheck-primary d-inline ml-2">
                                     <input type="checkbox" value="" name="todo3" id="todoCheck3">
                                     <label for="todoCheck3"></label>
                                 </div>
                                 <span class="text">Let theme shine like a star</span>
                                 <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                                 <div class="tools">
                                     <i class="fas fa-edit"></i>
                                     <i class="fas fa-trash-o"></i>
                                 </div>
                             </li>
                             <li>
                 <span class="handle ui-sortable-handle">
                   <i class="fas fa-ellipsis-v"></i>
                   <i class="fas fa-ellipsis-v"></i>
                 </span>
                                 <div class="icheck-primary d-inline ml-2">
                                     <input type="checkbox" value="" name="todo4" id="todoCheck4">
                                     <label for="todoCheck4"></label>
                                 </div>
                                 <span class="text">Let theme shine like a star</span>
                                 <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                                 <div class="tools">
                                     <i class="fas fa-edit"></i>
                                     <i class="fas fa-trash-o"></i>
                                 </div>
                             </li>
                             <li>
                 <span class="handle ui-sortable-handle">
                   <i class="fas fa-ellipsis-v"></i>
                   <i class="fas fa-ellipsis-v"></i>
                 </span>
                                 <div class="icheck-primary d-inline ml-2">
                                     <input type="checkbox" value="" name="todo5" id="todoCheck5">
                                     <label for="todoCheck5"></label>
                                 </div>
                                 <span class="text">Check your messages and notifications</span>
                                 <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                                 <div class="tools">
                                     <i class="fas fa-edit"></i>
                                     <i class="fas fa-trash-o"></i>
                                 </div>
                             </li>
                             <li>
                 <span class="handle ui-sortable-handle">
                   <i class="fas fa-ellipsis-v"></i>
                   <i class="fas fa-ellipsis-v"></i>
                 </span>
                                 <div class="icheck-primary d-inline ml-2">
                                     <input type="checkbox" value="" name="todo6" id="todoCheck6">
                                     <label for="todoCheck6"></label>
                                 </div>
                                 <span class="text">Let theme shine like a star</span>
                                 <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                                 <div class="tools">
                                     <i class="fas fa-edit"></i>
                                     <i class="fas fa-trash-o"></i>
                                 </div>
                             </li>
                         </ul>-->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <button class="btn btn-info float-right" data-toggle="modal"
                                    data-target="#objetivosimpresariais"><i class="fas fa-plus"></i> Add item
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="objetivosimpresariais" tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Inserção de novo objetivo</h4>
                                            <button type="button" class="close" data-dismiss="modal"><span
                                                    aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                            </button>
                                        </div>
                                        <form method="POST" action="{{ route("addObjetivo") }}"
                                              enctype="multipart/form-data">
                                            <div class="form-group">
                                                <table>
                                                    <tr>
                                                        {{ csrf_field() }}
                                                        <td>Objetivo:</td>
                                                        <td><input type=text" name="title" size="50"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Data de Fim:</td>
                                                        <td><input type="date" name="end" size="30"></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="modal-footer" class="form-group">
                                                <button type="submit" class="btn btn-primary">Adicionar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </section>
                <!-- /.Left col -->


                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-5 connectedSortable ui-sortable">


                    <!-- Calendar -->
                    <div class="card bg-gradient-success">
                        <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

                            <h3 class="card-title">
                                <i class="far fa-calendar-alt"></i>
                                Calendar
                            </h3>
                            <!-- tools card -->
                            <div class="card-tools">
                                <!-- button with a dropdown -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success btn-sm dropdown-toggle"
                                            data-toggle="dropdown">
                                        <i class="fas fa-bars"></i></button>
                                    <div class="dropdown-menu float-right" role="menu">
                                        <a href="#" class="dropdown-item">Add new event</a>
                                        <a href="#" class="dropdown-item">Clear events</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">View calendar</a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body pt-0">
                            <!--The calendar -->
                            <div id="calendar" style="width: 100%">
                                <div class="bootstrap-datetimepicker-widget usetwentyfour">
                                    <ul class="list-unstyled">
                                        <li class="show">
                                            <div class="datepicker">
                                                <div class="datepicker-days" style="">
                                                    <table class="table table-sm">
                                                        <thead>
                                                        <tr>
                                                            <th class="prev" data-action="previous"><span
                                                                    class="fa fa-chevron-left"
                                                                    title="Previous Month"></span></th>
                                                            <th class="picker-switch" data-action="pickerSwitch"
                                                                colspan="5" title="Select Month">January 2020
                                                            </th>
                                                            <th class="next" data-action="next"><span
                                                                    class="fa fa-chevron-right"
                                                                    title="Next Month"></span></th>
                                                        </tr>
                                                        <tr>
                                                            <th class="dow">Su</th>
                                                            <th class="dow">Mo</th>
                                                            <th class="dow">Tu</th>
                                                            <th class="dow">We</th>
                                                            <th class="dow">Th</th>
                                                            <th class="dow">Fr</th>
                                                            <th class="dow">Sa</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td data-action="selectDay" data-day="12/29/2019"
                                                                class="day old weekend">29
                                                            </td>
                                                            <td data-action="selectDay" data-day="12/30/2019"
                                                                class="day old">30
                                                            </td>
                                                            <td data-action="selectDay" data-day="12/31/2019"
                                                                class="day old">31
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/01/2020"
                                                                class="day">1
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/02/2020"
                                                                class="day">2
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/03/2020"
                                                                class="day">3
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/04/2020"
                                                                class="day weekend">4
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td data-action="selectDay" data-day="01/05/2020"
                                                                class="day weekend">5
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/06/2020"
                                                                class="day">6
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/07/2020"
                                                                class="day">7
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/08/2020"
                                                                class="day">8
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/09/2020"
                                                                class="day active today">9
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/10/2020"
                                                                class="day">10
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/11/2020"
                                                                class="day weekend">11
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td data-action="selectDay" data-day="01/12/2020"
                                                                class="day weekend">12
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/13/2020"
                                                                class="day">13
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/14/2020"
                                                                class="day">14
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/15/2020"
                                                                class="day">15
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/16/2020"
                                                                class="day">16
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/17/2020"
                                                                class="day">17
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/18/2020"
                                                                class="day weekend">18
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td data-action="selectDay" data-day="01/19/2020"
                                                                class="day weekend">19
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/20/2020"
                                                                class="day">20
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/21/2020"
                                                                class="day">21
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/22/2020"
                                                                class="day">22
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/23/2020"
                                                                class="day">23
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/24/2020"
                                                                class="day">24
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/25/2020"
                                                                class="day weekend">25
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td data-action="selectDay" data-day="01/26/2020"
                                                                class="day weekend">26
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/27/2020"
                                                                class="day">27
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/28/2020"
                                                                class="day">28
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/29/2020"
                                                                class="day">29
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/30/2020"
                                                                class="day">30
                                                            </td>
                                                            <td data-action="selectDay" data-day="01/31/2020"
                                                                class="day">31
                                                            </td>
                                                            <td data-action="selectDay" data-day="02/01/2020"
                                                                class="day new weekend">1
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td data-action="selectDay" data-day="02/02/2020"
                                                                class="day new weekend">2
                                                            </td>
                                                            <td data-action="selectDay" data-day="02/03/2020"
                                                                class="day new">3
                                                            </td>
                                                            <td data-action="selectDay" data-day="02/04/2020"
                                                                class="day new">4
                                                            </td>
                                                            <td data-action="selectDay" data-day="02/05/2020"
                                                                class="day new">5
                                                            </td>
                                                            <td data-action="selectDay" data-day="02/06/2020"
                                                                class="day new">6
                                                            </td>
                                                            <td data-action="selectDay" data-day="02/07/2020"
                                                                class="day new">7
                                                            </td>
                                                            <td data-action="selectDay" data-day="02/08/2020"
                                                                class="day new weekend">8
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="datepicker-months" style="display: none;">
                                                    <table class="table-condensed">
                                                        <thead>
                                                        <tr>
                                                            <th class="prev" data-action="previous"><span
                                                                    class="fa fa-chevron-left"
                                                                    title="Previous Year"></span></th>
                                                            <th class="picker-switch" data-action="pickerSwitch"
                                                                colspan="5" title="Select Year">2020
                                                            </th>
                                                            <th class="next" data-action="next"><span
                                                                    class="fa fa-chevron-right"
                                                                    title="Next Year"></span></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td colspan="7"><span data-action="selectMonth"
                                                                                  class="month active">Jan</span><span
                                                                    data-action="selectMonth"
                                                                    class="month">Feb</span><span
                                                                    data-action="selectMonth"
                                                                    class="month">Mar</span><span
                                                                    data-action="selectMonth"
                                                                    class="month">Apr</span><span
                                                                    data-action="selectMonth"
                                                                    class="month">May</span><span
                                                                    data-action="selectMonth"
                                                                    class="month">Jun</span><span
                                                                    data-action="selectMonth"
                                                                    class="month">Jul</span><span
                                                                    data-action="selectMonth"
                                                                    class="month">Aug</span><span
                                                                    data-action="selectMonth"
                                                                    class="month">Sep</span><span
                                                                    data-action="selectMonth"
                                                                    class="month">Oct</span><span
                                                                    data-action="selectMonth"
                                                                    class="month">Nov</span><span
                                                                    data-action="selectMonth" class="month">Dec</span>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="datepicker-years" style="display: none;">
                                                    <table class="table-condensed">
                                                        <thead>
                                                        <tr>
                                                            <th class="prev" data-action="previous"><span
                                                                    class="fa fa-chevron-left"
                                                                    title="Previous Decade"></span></th>
                                                            <th class="picker-switch" data-action="pickerSwitch"
                                                                colspan="5" title="Select Decade">2020-2029
                                                            </th>
                                                            <th class="next" data-action="next"><span
                                                                    class="fa fa-chevron-right"
                                                                    title="Next Decade"></span></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td colspan="7"><span data-action="selectYear"
                                                                                  class="year old">2019</span><span
                                                                    data-action="selectYear"
                                                                    class="year active">2020</span><span
                                                                    data-action="selectYear"
                                                                    class="year">2021</span><span
                                                                    data-action="selectYear"
                                                                    class="year">2022</span><span
                                                                    data-action="selectYear"
                                                                    class="year">2023</span><span
                                                                    data-action="selectYear"
                                                                    class="year">2024</span><span
                                                                    data-action="selectYear"
                                                                    class="year">2025</span><span
                                                                    data-action="selectYear"
                                                                    class="year">2026</span><span
                                                                    data-action="selectYear"
                                                                    class="year">2027</span><span
                                                                    data-action="selectYear"
                                                                    class="year">2028</span><span
                                                                    data-action="selectYear"
                                                                    class="year">2029</span><span
                                                                    data-action="selectYear"
                                                                    class="year old">2030</span></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="datepicker-decades" style="display: none;">
                                                    <table class="table-condensed">
                                                        <thead>
                                                        <tr>
                                                            <th class="prev" data-action="previous"><span
                                                                    class="fa fa-chevron-left"
                                                                    title="Previous Century"></span></th>
                                                            <th class="picker-switch" data-action="pickerSwitch"
                                                                colspan="5">2000-2090
                                                            </th>
                                                            <th class="next" data-action="next"><span
                                                                    class="fa fa-chevron-right"
                                                                    title="Next Century"></span></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td colspan="7"><span data-action="selectDecade"
                                                                                  class="decade old"
                                                                                  data-selection="2006">1990</span><span
                                                                    data-action="selectDecade" class="decade"
                                                                    data-selection="2006">2000</span><span
                                                                    data-action="selectDecade" class="decade active"
                                                                    data-selection="2016">2010</span><span
                                                                    data-action="selectDecade" class="decade"
                                                                    data-selection="2026">2020</span><span
                                                                    data-action="selectDecade" class="decade"
                                                                    data-selection="2036">2030</span><span
                                                                    data-action="selectDecade" class="decade"
                                                                    data-selection="2046">2040</span><span
                                                                    data-action="selectDecade" class="decade"
                                                                    data-selection="2056">2050</span><span
                                                                    data-action="selectDecade" class="decade"
                                                                    data-selection="2066">2060</span><span
                                                                    data-action="selectDecade" class="decade"
                                                                    data-selection="2076">2070</span><span
                                                                    data-action="selectDecade" class="decade"
                                                                    data-selection="2086">2080</span><span
                                                                    data-action="selectDecade" class="decade"
                                                                    data-selection="2096">2090</span><span
                                                                    data-action="selectDecade" class="decade old"
                                                                    data-selection="2106">2100</span></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="picker-switch accordion-toggle"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- DIRECT CHAT -->
                    <div class="card direct-chat direct-chat-primary">
                        <div class="card-header ui-sortable-handle" style="cursor: move;">
                            <h3 class="card-title">Direct Chat</h3>

                            <div class="card-tools">
                                <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary">3</span>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
                                        data-widget="chat-pane-toggle">
                                    <i class="fas fa-comments"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                        class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- Conversations are loaded here -->
                            <div class="direct-chat-messages">
                                <!-- Message. Default to the left -->
                                <div class="direct-chat-msg">
                                    <div class="direct-chat-infos clearfix">
                                        <span class="direct-chat-name float-left">Alexander Pierce</span>
                                        <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                    </div>
                                    <!-- /.direct-chat-infos -->
                                    <img class="direct-chat-img" src="dist/img/user1-128x128.jpg"
                                         alt="message user image">
                                    <!-- /.direct-chat-img -->
                                    <div class="direct-chat-text">
                                        Is this template really for free? That's unbelievable!
                                    </div>
                                    <!-- /.direct-chat-text -->
                                </div>
                                <!-- /.direct-chat-msg -->

                                <!-- Message to the right -->
                                <div class="direct-chat-msg right">
                                    <div class="direct-chat-infos clearfix">
                                        <span class="direct-chat-name float-right">Sarah Bullock</span>
                                        <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                    </div>
                                    <!-- /.direct-chat-infos -->
                                    <img class="direct-chat-img" src="dist/img/user3-128x128.jpg"
                                         alt="message user image">
                                    <!-- /.direct-chat-img -->
                                    <div class="direct-chat-text">
                                        You better believe it!
                                    </div>
                                    <!-- /.direct-chat-text -->
                                </div>
                                <!-- /.direct-chat-msg -->

                                <!-- Message. Default to the left -->
                                <div class="direct-chat-msg">
                                    <div class="direct-chat-infos clearfix">
                                        <span class="direct-chat-name float-left">Alexander Pierce</span>
                                        <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                                    </div>
                                    <!-- /.direct-chat-infos -->
                                    <img class="direct-chat-img" src="dist/img/user1-128x128.jpg"
                                         alt="message user image">
                                    <!-- /.direct-chat-img -->
                                    <div class="direct-chat-text">
                                        Working with AdminLTE on a great new app! Wanna join?
                                    </div>
                                    <!-- /.direct-chat-text -->
                                </div>
                                <!-- /.direct-chat-msg -->

                                <!-- Message to the right -->
                                <div class="direct-chat-msg right">
                                    <div class="direct-chat-infos clearfix">
                                        <span class="direct-chat-name float-right">Sarah Bullock</span>
                                        <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                                    </div>
                                    <!-- /.direct-chat-infos -->
                                    <img class="direct-chat-img" src="dist/img/user3-128x128.jpg"
                                         alt="message user image">
                                    <!-- /.direct-chat-img -->
                                    <div class="direct-chat-text">
                                        I would love to.
                                    </div>
                                    <!-- /.direct-chat-text -->
                                </div>
                                <!-- /.direct-chat-msg -->

                            </div>
                            <!--/.direct-chat-messages-->

                            <!-- Contacts are loaded here -->
                            <div class="direct-chat-contacts">
                                <ul class="contacts-list">
                                    <li>
                                        <a href="#">
                                            <img class="contacts-list-img" src="dist/img/user1-128x128.jpg">

                                            <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Count Dracula
                            <small class="contacts-list-date float-right">2/28/2015</small>
                          </span>
                                                <span class="contacts-list-msg">How have you been? I was...</span>
                                            </div>
                                            <!-- /.contacts-list-info -->
                                        </a>
                                    </li>
                                    <!-- End Contact Item -->
                                    <li>
                                        <a href="#">
                                            <img class="contacts-list-img" src="dist/img/user7-128x128.jpg">

                                            <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Sarah Doe
                            <small class="contacts-list-date float-right">2/23/2015</small>
                          </span>
                                                <span class="contacts-list-msg">I will be waiting for...</span>
                                            </div>
                                            <!-- /.contacts-list-info -->
                                        </a>
                                    </li>
                                    <!-- End Contact Item -->
                                    <li>
                                        <a href="#">
                                            <img class="contacts-list-img" src="dist/img/user3-128x128.jpg">

                                            <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Nadia Jolie
                            <small class="contacts-list-date float-right">2/20/2015</small>
                          </span>
                                                <span class="contacts-list-msg">I'll call you back at...</span>
                                            </div>
                                            <!-- /.contacts-list-info -->
                                        </a>
                                    </li>
                                    <!-- End Contact Item -->
                                    <li>
                                        <a href="#">
                                            <img class="contacts-list-img" src="dist/img/user5-128x128.jpg">

                                            <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Nora S. Vans
                            <small class="contacts-list-date float-right">2/10/2015</small>
                          </span>
                                                <span class="contacts-list-msg">Where is your new...</span>
                                            </div>
                                            <!-- /.contacts-list-info -->
                                        </a>
                                    </li>
                                    <!-- End Contact Item -->
                                    <li>
                                        <a href="#">
                                            <img class="contacts-list-img" src="dist/img/user6-128x128.jpg">

                                            <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            John K.
                            <small class="contacts-list-date float-right">1/27/2015</small>
                          </span>
                                                <span class="contacts-list-msg">Can I take a look at...</span>
                                            </div>
                                            <!-- /.contacts-list-info -->
                                        </a>
                                    </li>
                                    <!-- End Contact Item -->
                                    <li>
                                        <a href="#">
                                            <img class="contacts-list-img" src="dist/img/user8-128x128.jpg">

                                            <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Kenneth M.
                            <small class="contacts-list-date float-right">1/4/2015</small>
                          </span>
                                                <span class="contacts-list-msg">Never mind I found...</span>
                                            </div>
                                            <!-- /.contacts-list-info -->
                                        </a>
                                    </li>
                                    <!-- End Contact Item -->
                                </ul>
                                <!-- /.contacts-list -->
                            </div>
                            <!-- /.direct-chat-pane -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <form action="#" method="post">
                                <div class="input-group">
                                    <input type="text" name="message" placeholder="Type Message ..."
                                           class="form-control">
                                    <span class="input-group-append">
                      <button type="button" class="btn btn-primary">Send</button>
                    </span>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!--/.direct-chat -->

                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
