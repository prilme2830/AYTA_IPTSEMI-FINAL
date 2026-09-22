<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Workout Tracker</title>

</head>

<body>
    <table border="1" cellpadding="10">
        <thead>
            <>
                <th class="fw-bold">ID</th>
                <th class="fw-bold">Home/Dashboard</th>
                <th class="fw-bold">Workout List</th>
                <button type="button" class="btn btn-primary">Add Workout</button>
        </thead>
        <tbody>
            @foreach($fitnesses as $fitness)
                <tr>

                    <td>{{ $fitness->workouts }}</td>
                    <td>{{ $fitness->exercises }}</td>
                    <td>{{ $fitness->workout_logs }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>