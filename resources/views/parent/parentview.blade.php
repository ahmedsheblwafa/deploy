@extends('layouts.parent')
@section ('content')
<div class="jumbotron " style="margin-top: 30px;">
        <h1>Child name</h1>
        <h3>Grade</h3>
        
        <br>
        <br>
        <!-- ****** -->

        <div class="container text-center" style="margin-bottom: 20px;">
            <h3 >Over all progress</h3>
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                  <span >50%</span>
                </div>
              </div>
        </div>

        <!-- *************************************************************************************************************************** -->
        <div class="childsubjects container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <p style="font-weight: 800;">subject1 name</p>
                    <label> whole subject progress:</label>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                          <span >80%</span>
                        </div>
                      </div>
                    <br>
                    <label> task 1:</label>
                    <meter id="task4" min="0" max="10" value="7" low="5" high="10" optimum="6">2 out of 10</meter>
                    <br>
                    <label> task 2:</label>
                    <meter id="task4" min="0" max="10" value="7" low="5" high="10" optimum="6">2 out of 10</meter>
                    <br>
                    <label> task 3:</label>
                    <meter id="task4" min="0" max="10" value="8" low="5" high="10" optimum="6">2 out of 10</meter>
                    <br>
                    <label> task 4:</label>
                    <meter id="task4" min="0" max="10" value="10" low="5" high="10" optimum="6">2 out of 10</meter>
                </div>
                <div class="col-lg-3">
                    <p style="font-weight: 800;">subject1 name</p>
                    <label> whole subject progress:</label>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                          <span>30%  </span>
                        </div>
                      </div>
                    <br>
                    <label> task 1:</label>
                    <meter id="task4" min="0" max="10" value="4" low="5" high="10" optimum="6">2 out of 10</meter>
                    <br>
                    <label> task 2:</label>
                    <meter id="task4" min="0" max="10" value="7" low="5" high="10" optimum="6">2 out of 10</meter>
                    <br>
                    <label> task 3:</label>
                    <meter id="task4" min="0" max="10" value="8" low="5" high="10" optimum="6">2 out of 10</meter>
                    <br>
                    <label> task 4:</label>
                    <meter id="task4" min="0" max="10" value="3" low="5" high="10" optimum="6">2 out of 10</meter>
                </div>
                <div class="col-lg-3">
                    <p style="font-weight: 800;">subject2 name</p>
                    <label> whole subject progress:</label>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                          <span >50%  </span>
                        </div>
                      </div>
                    <br>
                    <label> task 1:</label>
                    <meter id="task4" min="0" max="10" value="7" low="5" high="10" optimum="6">2 out of 10</meter>
                    <br>
                    <label> task 2:</label>
                    <meter id="task4" min="0" max="10" value="8" low="5" high="10" optimum="6">2 out of 10</meter>
                    <br>
                    <label> task 3:</label>
                    <meter id="task4" min="0" max="10" value="4" low="5" high="10" optimum="6">2 out of 10</meter>
                    <br>
                    <label> task 4:</label>
                    <meter id="task4" min="0" max="10" value="10" low="5" high="10" optimum="6">2 out of 10</meter>
                </div>
                <div class="col-lg-3">
                    <p style="font-weight: 800;">subject1 name</p>
                    <label> whole subject progress:</label>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                          <span >10% Complete </span>
                        </div>
                      </div>                    <br>
                    <label> task 1:</label>
                    <meter id="task4" min="0" max="10" value="4" low="5" high="10" optimum="6">2 out of 10</meter>
                    <br>
                    <label> task 2:</label>
                    <meter id="task4" min="0" max="10" value="6" low="5" high="10" optimum="6">2 out of 10</meter>
                    <br>
                    <label> task 3:</label>
                    <meter id="task4" min="0" max="10" value="8" low="5" high="10" optimum="6">2 out of 10</meter>
                    <br>
                    <label> task 4:</label>
                    <meter id="task4" min="0" max="10" value="10" low="5" high="10" optimum="6">2 out of 10</meter>
                </div>
            </div>
        </div>

        <!-- ****** -->

    </div>

    <div class="jumbotron " style="margin-top: 30px;">
        <h1>Child 2 name</h1>
        <h3>Grade</h3>
        
        <br>
        <br>
        <!-- ****** -->

        <div class="container text-center" style="margin-bottom: 20px;">
            <h3 >Over all progress</h3>
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                  <span >50%</span>
                </div>
              </div>
        </div>

        <!-- *************************************************************************************************************************** -->
        <div class="childsubjects container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <p style="font-weight: 800;">subject1 name</p>
                    <label> whole subject progress:</label>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                          <span >80%</span>
                        </div>
                      </div>
                    <br>
                    <label> task 1:</label>
                    <meter id="task4" min="0" max="10" value="7" low="5" high="10" optimum="6">2 out of 10</meter>
                    <br>
                    <label> task 2:</label>
                    <meter id="task4" min="0" max="10" value="7" low="5" high="10" optimum="6">2 out of 10</meter>
                    <br>
                    <label> task 3:</label>
                    <meter id="task4" min="0" max="10" value="8" low="5" high="10" optimum="6">2 out of 10</meter>
                    <br>
                    <label> task 4:</label>
                    <meter id="task4" min="0" max="10" value="10" low="5" high="10" optimum="6">2 out of 10</meter>
                </div>
                <div class="col-lg-3">
                    <p style="font-weight: 800;">subject1 name</p>
                    <label> whole subject progress:</label>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                          <span>30%  </span>
                        </div>
                      </div>
                    <br>
                    <label> task 1:</label>
                    <meter id="task4" min="0" max="10" value="4" low="5" high="10" optimum="6">2 out of 10</meter>
                    <br>
                    <label> task 2:</label>
                    <meter id="task4" min="0" max="10" value="7" low="5" high="10" optimum="6">2 out of 10</meter>
                    <br>
                    <label> task 3:</label>
                    <meter id="task4" min="0" max="10" value="8" low="5" high="10" optimum="6">2 out of 10</meter>
                    <br>
                    <label> task 4:</label>
                    <meter id="task4" min="0" max="10" value="3" low="5" high="10" optimum="6">2 out of 10</meter>
                </div>
                <div class="col-lg-3">
                    <p style="font-weight: 800;">subject2 name</p>
                    <label> whole subject progress:</label>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                          <span >50%  </span>
                        </div>
                      </div>
                    <br>
                    <label> task 1:</label>
                    <meter id="task4" min="0" max="10" value="7" low="5" high="10" optimum="6">2 out of 10</meter>
                    <br>
                    <label> task 2:</label>
                    <meter id="task4" min="0" max="10" value="8" low="5" high="10" optimum="6">2 out of 10</meter>
                    <br>
                    <label> task 3:</label>
                    <meter id="task4" min="0" max="10" value="4" low="5" high="10" optimum="6">2 out of 10</meter>
                    <br>
                    <label> task 4:</label>
                    <meter id="task4" min="0" max="10" value="10" low="5" high="10" optimum="6">2 out of 10</meter>
                </div>
                <div class="col-lg-3">
                    <p style="font-weight: 800;">subject1 name</p>
                    <label> whole subject progress:</label>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                          <span >10% Complete </span>
                        </div>
                      </div>                    <br>
                    <label> task 1:</label>
                    <meter id="task4" min="0" max="10" value="4" low="5" high="10" optimum="6">2 out of 10</meter>
                    <br>
                    <label> task 2:</label>
                    <meter id="task4" min="0" max="10" value="6" low="5" high="10" optimum="6">2 out of 10</meter>
                    <br>
                    <label> task 3:</label>
                    <meter id="task4" min="0" max="10" value="8" low="5" high="10" optimum="6">2 out of 10</meter>
                    <br>
                    <label> task 4:</label>
                    <meter id="task4" min="0" max="10" value="10" low="5" high="10" optimum="6">2 out of 10</meter>
                </div>
            </div>
        </div>

        <!-- ****** -->

    </div>




@endsection