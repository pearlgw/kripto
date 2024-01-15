// // var ctx = document.getElementById('myPieChart').getContext('2d');
// // var myPieChart = new Chart(ctx, {
// //     type: 'pie',
// //     data: {
// //         labels: ['Label 1', 'Label 2', 'Label 3'],
// //         datasets: [{
// //             data: [30, 50, 20],
// //             backgroundColor: [
// //                 'rgba(255, 99, 132, 0.7)',
// //                 'rgba(54, 162, 235, 0.7)',
// //                 'rgba(255, 206, 86, 0.7)',
// //             ],
// //         }],
// //     },
// // });

// var ctx = document.getElementById('myPieChart').getContext('2d');

// // Mendapatkan data dari PHP Blade
// var paslonVotes = {!! json_encode($paslonVotes) !!};
// var totalVotes = {!! json_encode($totalVotes) !!};

// var labels = [];
// var data = [];

// paslonVotes.forEach(function(paslon) {
//     var percentage = (paslon.votes / totalVotes) * 100;
//     labels.push('Paslon ' + paslon.paslon_id);
//     data.push(percentage.toFixed(2)); // Pembulatan dua desimal
// });

// var myPieChart = new Chart(ctx, {
//     type: 'pie',
//     data: {
//         labels: labels,
//         datasets: [{
//             data: data,
//             backgroundColor: [
//                 'rgba(255, 99, 132, 0.7)',
//                 'rgba(54, 162, 235, 0.7)',
//                 // Tambahkan warna lain sesuai jumlah paslon
//             ],
//         }],
//     },
// });


