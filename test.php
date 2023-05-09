<?php

$conn = new mysqli("localhost","root", "", "bettest");
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
// Assuming $jsonString is the JSON string you want to use to update the database
$jsonString = 

// '{

// "1": {
//   "sample": [1, 1, 1, 1, 1],
//   "rows": 5,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 1,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 1,
//   "endingPoint": 5
// },

// "3": {
//   "sample": [1, 1, 1, 1, 1],
//   "rows": 5,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 1,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 1,
//   "endingPoint": 5
// },
// "4": {
//   "sample": [5],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 0,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "5": {
//   "sample": [1, 3],
//   "rows": 2,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 1,
//   "endingPoint": 2
// },
// "6": {
//   "sample": [2, 1],
//   "rows": 2,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 1,
//   "endingPoint": 2
// },
// "7": {
//   "sample": [1, 2],
//   "rows": 2,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 1,
//   "endingPoint": 2
// },
// "8": {
//   "sample": [1, 1],
//   "rows": 2,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 1,
//   "endingPoint": 2
// },
// "9": {
//   "sample": [1, 1],
//   "rows": 2,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 1,
//   "endingPoint": 2
// },
// "10": {
//   "sample": [1, 1, 1, 1],
//   "rows": 4,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 1,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 1,
//   "endingPoint": 4
// },
// "12": {
//   "sample": [1, 1, 1, 1],
//   "rows": 4,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 1,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 1,
//   "endingPoint": 4
// },
// "13": {
//   "sample": [1, 1, 1, 1],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "14": {
//   "sample": [1, 2],
//   "rows": 2,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 1,
//   "endingPoint": 2
// },
// "15": {
//   "sample": [2],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "16": {
//   "sample": [1, 1],
//   "rows": 2,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 1,
//   "endingPoint": 2
// },
// "17": {
//   "sample": [1, 1, 1, 1],
//   "rows": 4,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 1,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 2,
//   "endingPoint": 5
// },
// "19": {
//   "sample": [1, 1, 1, 1],
//   "rows": 4,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 1,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 2,
//   "endingPoint": 5
// },
// "20": {
//   "sample": [4],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "21": {
//   "sample": [1, 2],
//   "rows": 2,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 1,
//   "endingPoint": 2
// },
// "22": {
//   "sample": [2],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "23": {
//   "sample": [1, 1],
//   "rows": 2,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 2
// },
// "24": {
//   "sample": [1, 1, 1],
//   "rows": 3,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 1,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 1,
//   "endingPoint": 3
// },
// "26": {
//   "sample": [1, 1, 1],
//   "rows": 3,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 1,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 1,
//   "endingPoint": 3
// },
// "27": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 27,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "28": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "29": {
//   "sample": [2],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "30": {
//   "sample": [3],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "32": {
//   "sample": [1],
//   "rows": 1,
//   "start": 1,
//   "end": 26,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "35": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 0,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "36": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 0,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "37": {
//   "sample": [1, 1, 1],
//   "rows": 3,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 1,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 2,
//   "endingPoint": 4
// },
// "39": {
//   "sample": [1, 1, 1],
//   "rows": 3,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 1,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 2,
//   "endingPoint": 4
// },
// "40": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 27,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "41": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "42": {
//   "sample": [2],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "43": {
//   "sample": [3],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "45": {
//   "sample": [1],
//   "rows": 1,
//   "start": 1,
//   "end": 26,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "48": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 0,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "49": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 0,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "50": {
//   "sample": [1, 1, 1],
//   "rows": 5,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 1,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 3
// },
// "52": {
//   "sample": [1, 1, 1],
//   "rows": 3,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 1,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 3,
//   "endingPoint": 5
// },
// "53": {
//   "sample": [1],
//   "rows": 3,
//   "start": 0,
//   "end": 27,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "54": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "55": {
//   "sample": [2],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "56": {
//   "sample": [3],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "58": {
//   "sample": [1],
//   "rows": 1,
//   "start": 1,
//   "end": 26,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "61": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 0,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "62": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 0,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "63": {
//   "sample": [1, 1],
//   "rows": 2,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 1,
//   "endingPoint": 2
// },
// "65": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 18,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "66": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "67": {
//   "sample": [2],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "69": {
//   "sample": [1],
//   "rows": 1,
//   "start": 1,
//   "end": 17,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "70": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 0,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "91": {
//   "sample": [1, 1],
//   "rows": 2,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 4,
//   "endingPoint": 5
// },
// "93": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "94": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "95": {
//   "sample": [2],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "97": {
//   "sample": [1],
//   "rows": 1,
//   "start": 1,
//   "end": 17,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "98": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 0,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "99": {
//   "sample": [1, 1, 1, 1, 1],
//   "rows": 5,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 1,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 1,
//   "endingPoint": 5
// },
// "100": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "101": {
//   "sample": [2],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "102": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "103": {
//   "sample": [2],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "104": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "105": {
//   "sample": [2],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "106": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "107": {
//   "sample": [2],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "108": {
//   "sample": [3],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "109": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "110": {
//   "sample": [2],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "111": {
//   "sample": [3],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "112": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "113": {
//   "sample": [2],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "114": {
//   "sample": [3],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "121": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "122": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "123": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "124": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "125": {
//   "sample": [1, 1],
//   "rows": 5,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 1,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 1,
//   "endingPoint": 5
// },
// "127": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 18,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "128": {
//   "sample": [2],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "130": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 17,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "131": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 0,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "132": {
//   "sample": [1, 1, 1],
//   "rows": 5,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 1,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 1,
//   "endingPoint": 5
// },
// "134": {
//   "sample": [1],
//   "rows": 1,
//   "start": 0,
//   "end": 27,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "135": {
//   "sample": [2],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "136": {
//   "sample": [3],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "138": {
//   "sample": [1],
//   "rows": 1,
//   "start": 1,
//   "end": 26,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "139": {
//   "sample": [1, 1, 1, 1],
//   "rows": 4,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 1,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 1,
//   "endingPoint": 4
// },
// "141": {
//   "sample": [4],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "142": {
//   "sample": [1, 2],
//   "rows": 2,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 1,
//   "endingPoint": 2
// },
// "143": {
//   "sample": [2],
//   "rows": 1,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 0,
//   "startingPoint": 1,
//   "endingPoint": 1
// },
// "144": {
//   "sample": [1, 1],
//   "rows": 2,
//   "start": 0,
//   "end": 9,
//   "columnSelection": 0,
//   "rowSelection": 1,
//   "showRowName": 1,
//   "startingPoint": 1,
//   "endingPoint": 2
// }
// }';

  
  // Decode the JSON string into a PHP array
  $data = json_decode($jsonString, true);
  
  // Loop through each object in the array
  foreach ($data as $key => $value) {

    // Update the database with the new value
   
    $sample = $value['sample'];
    $arrayAsString = json_encode($samplet);
    $rows = $value['rows'];
    $start = $value['start'];
    $end = $value['end'];
    $columnSelection = $value['columnSelection'];
    $rowSelection = $value['rowSelection'];
    $showRowName = $value['showRowName'];
    $startingPoint = $value['startingPoint'];
    $endingPoint = $value['endingPoint'];
    
    // Create a new database connection
    $sql = "UPDATE game_name SET 
        sample = $arrayAsString,
        row = $rows,
        start = $start,
        end = $end,
        columnSelection = $columnSelection,
        rowSelection = $rowSelection,
        showRowName = $showRowName,
        startingPoint = $startingPoint,
        endingPoint = $endingPoint
     WHERE gn_id = $key ";

//   $result = mysqli_query($conn,$sql);
  if($result){
      echo "updated";
  }
      echo "Error updating record: " . mysqli_error($conn);

    }
  
  
  // Close the database connection
  mysqli_close($conn);
  
 



// ?>
// <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
// <script>
  
//     function myfuction(){
//         getCurrentTime();
//     }

//     //setInterval(myfuction,1000);

//     function getCurrentTime(){
//         var date = new Date();
//         var hour = date.getHours().toString().padStart(2,"0");
//         var minute = date.getMinutes().toString().padStart(2,"0");
//         var second = date.getSeconds().toString().padStart(2,"0");
//         const drawTime = hour + ":" + minute + ":" + second;
//         if(second == "00"){
//             $.post("draw.php",{
//             drawTime : drawTime
//             },function(data){
//             console.log(data);
//             })
//         }else{
//             console.log(second);
//         }
       
//     }

//     myfuction();