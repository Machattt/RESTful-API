<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Sales Dataset</title>
    <style>
        body { 
            font-family: 'Consolas', 'Monaco', 'Courier New', monospace; 
            background-color: #2b2b2b; 
            color: #f0f0f0; 
            padding: 20px; 
            margin: 0;
        }
        h1 { 
            text-align: center; 
            color: #e0e0e0;
            margin-bottom: 20px;
        }
        .container { 
            width: 90%; 
            margin: 0 auto;
            overflow-x: auto; 
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            min-width: 1200px;
            background-color: #3b3b3b;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
            margin: 0 auto;
        }
        th, td { 
            padding: 12px 15px; 
            text-align: center; 
            border: 1px solid #555; 
        }
        th { 
            background-color: #4a4a4a; 
            color: #ffffff; 
            font-weight: bold; 
            position: sticky;
            top: 0;
            z-index: 10;
        }
        tr:nth-child(even) { 
            background-color: #323232; 
        }
        tr:hover { 
            background-color: #555; 
            cursor: default;
        }
        .count {
            text-align: center;
            margin-bottom: 20px;
            color: #aaa;
            font-style: italic;
        }
    </style>
</head>
<body>
    <h1>Coffee Sales Dataset</h1>
    <div class="count">Total Rows: {{ count($data) }}</div>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Hour of day</th>
                    <th>Cash Type</th>
                    <th>Money</th>
                    <th>Coffee Name</th>
                    <th>Time of Day</th>
                    <th>Weekday</th>
                    <th>Month</th>
                    <th>Weekday#</th>
                    <th>Month#</th>
                    <th>Date</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{ $item->_id }}</td>
                    <td>{{ $item->hour_of_day }}</td>
                    <td>{{ $item->cash_type }}</td>
                    <td style="color: #90ee90;">{{ number_format($item->money) }}</td>
                    <td style="color: #ffd700;">{{ $item->coffee_name }}</td>
                    <td>{{ $item->Time_of_Day }}</td>
                    <td>{{ $item->Weekday }}</td>
                    <td>{{ $item->Month_name }}</td>
                    <td>{{ $item->Weekdaysort }}</td>
                    <td>{{ $item->Monthsort }}</td>
                    <td>{{ $item->Date }}</td>
                    <td>{{ $item->Time }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
