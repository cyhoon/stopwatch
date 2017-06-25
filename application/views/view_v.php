<!-- Title -->
<div class="container-fluid">
    <div id="header">Stopwatch</div>
    <!-- Lap Time -->
    <div id="lap"><span id="lapminute">00</span>:<span id="lapsecond">00</span>:<span id="lapcentisecond">00</span></div>
    <!-- Time -->
    <div id="time"><span id="timeminute">00</span>:<span id="timesecond">00</span>:<span id="timecentisecond">00</span></div>
    <!-- Controls -->
    <div id="controlsContainer" class="row">
        <div class="col-xs-2 col-xs-offset-4">
            <div id="startButton" class="control">
                Start
            </div>
            <div id="stopButton" class="control">
                Stop
            </div>
            <div id="resumeButton" class="control">
                Resume
            </div>
        </div>
        <div class="col-xs-2">
            <div id="lapButton" class="control">
                Lap
            </div>
            <div id="resetButton" class="control">
                Reset
            </div>
        </div>
    </div>
    <!-- Laps -->
    <div id="laps"></div>
</div>