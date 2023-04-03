@extends('layouts.main')

@section('page.title', 'Bookmaker')

@section('main.content')

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th scope="col" class="text-center align-middle">Date</th>
            <th scope="col">Who against who</th>
            <th scope="col" class="text-center align-middle">1</th>
            <th scope="col" class="text-center align-middle">x</th>
            <th scope="col" class="text-center align-middle">2</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row" class="text-center align-middle text-muted small">02.04
                <div>18:30</div>
            </th>
            <td>
                <div><a href="#">Newcastle</a></div>
                <div><a href="#">Manchester United</a></div>
            </td>

            <td class="text-center align-middle">
                <input type="button" value="2.0" id="win1" class="btn btn-outline-success">
            </td>
            <td class="text-center align-middle">
                <input type="button" value="3.75" id="draw" class="btn btn-outline-success">
            </td>
            <td class="text-center align-middle">
                <input type="button" value="1.82" id="win2" class="btn btn-outline-success">
            </td>
        </tr>
        </tbody>
    </table>

    <div id="output"></div>

    <style>
        .btn.clicked {
            background-color: green;
            color: white;
        }
    </style>

    <script>
        // Get references to the buttons and output div
        const win1Button = document.getElementById("win1");
        const drawButton = document.getElementById("draw");
        const win2Button = document.getElementById("win2");
        const outputDiv = document.getElementById("output");

        // Add event listeners to the buttons
        win1Button.addEventListener("click", function () {
            removeClickedClassFromAllButtons();
            win1Button.classList.add("clicked");
            outputDiv.innerHTML = `<b>${win1Button.value}</b>`;
        });

        drawButton.addEventListener("click", function () {
            removeClickedClassFromAllButtons();
            drawButton.classList.add("clicked");
            outputDiv.innerHTML = `<b>${drawButton.value}</b>`;
        });

        win2Button.addEventListener("click", function () {
            removeClickedClassFromAllButtons();
            win2Button.classList.add("clicked");
            outputDiv.innerHTML = `<b>${win2Button.value}</b>`;
        });

        // Helper function to remove the "clicked" class from all buttons
        function removeClickedClassFromAllButtons() {
            win1Button.classList.remove("clicked");
            drawButton.classList.remove("clicked");
            win2Button.classList.remove("clicked");
        }
    </script>

@endsection
