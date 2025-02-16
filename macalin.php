<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
</head>

<body>
    

<table id="mytable" class="display nowrap dataTable dtr-inline " style="width: 100%;"
        aria-describedby="example_info">
        <thead>
            <tr>
                <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                    style="width: 105px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">
                    Name</th>
                <th class="sorting dtr-hidden" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                    style="width: 0px; display: none;" aria-label="Position: activate to sort column ascending">Position
                </th>
                <th class="sorting dtr-hidden" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                    style="width: 0px; display: none;" aria-label="Office: activate to sort column ascending">Office
                </th>
                <th class="dt-body-right sorting dtr-hidden" tabindex="0" aria-controls="example" rowspan="1"
                    colspan="1" style="width: 0px; display: none;" aria-label="Age: activate to sort column ascending">
                    Age</th>
                <th class="dt-body-right sorting dtr-hidden" tabindex="0" aria-controls="example" rowspan="1"
                    colspan="1" style="width: 0px; display: none;"
                    aria-label="Start date: activate to sort column ascending">Start date</th>
                <th class="dt-body-right sorting dtr-hidden" tabindex="0" aria-controls="example" rowspan="1"
                    colspan="1" style="width: 0px; display: none;"
                    aria-label="Salary: activate to sort column ascending">Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr class="odd">
                <td class="dtr-control sorting_1" tabindex="0">Airi Satou</td>
                <td class="dtr-hidden" style="display: none;">Accountant</td>
                <td class="dtr-hidden" style="display: none;">Tokyo</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">33</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">11/28/2008</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">$162,700</td>
            </tr>
            <tr class="even">
                <td class="sorting_1 dtr-control">Angelica Ramos</td>
                <td class="dtr-hidden" style="display: none;">Chief Executive Officer (CEO)</td>
                <td class="dtr-hidden" style="display: none;">London</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">47</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">10/9/2009</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">$1,200,000</td>
            </tr>
            <tr class="odd">
                <td class="dtr-control sorting_1" tabindex="0">Ashton Cox</td>
                <td class="dtr-hidden" style="display: none;">Junior Technical Author</td>
                <td class="dtr-hidden" style="display: none;">San Francisco</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">66</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">1/12/2009</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">$86,000</td>
            </tr>
            <tr class="even">
                <td class="sorting_1 dtr-control">Bradley Greer</td>
                <td class="dtr-hidden" style="display: none;">Software Engineer</td>
                <td class="dtr-hidden" style="display: none;">London</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">41</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">10/13/2012</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">$132,000</td>
            </tr>
            <tr class="odd">
                <td class="sorting_1 dtr-control">Brenden Wagner</td>
                <td class="dtr-hidden" style="display: none;">Software Engineer</td>
                <td class="dtr-hidden" style="display: none;">San Francisco</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">28</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">6/7/2011</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">$206,850</td>
            </tr>
            <tr class="even">
                <td class="dtr-control sorting_1" tabindex="0">Brielle Williamson</td>
                <td class="dtr-hidden" style="display: none;">Integration Specialist</td>
                <td class="dtr-hidden" style="display: none;">New York</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">61</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">12/2/2012</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">$372,000</td>
            </tr>
            <tr class="odd">
                <td class="sorting_1 dtr-control">Bruno Nash</td>
                <td class="dtr-hidden" style="display: none;">Software Engineer</td>
                <td class="dtr-hidden" style="display: none;">London</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">38</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">5/3/2011</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">$163,500</td>
            </tr>
            <tr class="even">
                <td class="sorting_1 dtr-control">Caesar Vance</td>
                <td class="dtr-hidden" style="display: none;">Pre-Sales Support</td>
                <td class="dtr-hidden" style="display: none;">New York</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">21</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">12/12/2011</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">$106,450</td>
            </tr>
            <tr class="odd">
                <td class="sorting_1 dtr-control">Cara Stevens</td>
                <td class="dtr-hidden" style="display: none;">Sales Assistant</td>
                <td class="dtr-hidden" style="display: none;">New York</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">46</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">12/6/2011</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">$145,600</td>
            </tr>
            <tr class="even">
                <td class="dtr-control sorting_1" tabindex="0">Cedric Kelly</td>
                <td class="dtr-hidden" style="display: none;">Senior Javascript Developer</td>
                <td class="dtr-hidden" style="display: none;">Edinburgh</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">22</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">3/29/2012</td>
                <td class="dt-body-right dtr-hidden" style="display: none;">$433,060</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th rowspan="1" colspan="1">Name</th>
                <th rowspan="1" colspan="1" class="dtr-hidden" style="display: none;">Position</th>
                <th rowspan="1" colspan="1" class="dtr-hidden" style="display: none;">Office</th>
                <th class="dt-body-right dtr-hidden" rowspan="1" colspan="1" style="display: none;">Age</th>
                <th class="dt-body-right dtr-hidden" rowspan="1" colspan="1" style="display: none;">Start date</th>
                <th class="dt-body-right dtr-hidden" rowspan="1" colspan="1" style="display: none;">Salary</th>
            </tr>
        </tfoot>
    </table>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#mytable").DataTable();
        })
    </script>
</body>

</html>