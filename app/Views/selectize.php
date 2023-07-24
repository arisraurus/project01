<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Selectize</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.default.min.css" integrity="sha512-pTaEn+6gF1IeWv3W1+7X7eM60TFu/agjgoHmYhAfLEU8Phuf6JKiiE8YmsNC0aCgQv4192s4Vai8YZ6VNM6vyQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js" integrity="sha512-IOebNkvA/HZjMM7MxL0NYeLYEalloZ8ckak+NDtOViP7oiYzG5vn6WVXyrJDiJPhl4yRdmNAG49iuLmhkUdVsQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<div class="container">
    <div class="card">
        <div class="card-header">
            Sample 1
        </div>
        <div class="card-body">
            <div class="control-group">
                <label for="select-console">Console:</label>
                <select id="select-console" class="demo-consoles" placeholder="Select console..."></select>
            </div>

            <div class="control-group">
                <label for="select-console2">Console:</label>
                <select id="select-console2" class="demo-consoles" placeholder="Select console..."></select>
            </div>
        </div>
        <div class="card-footer text-muted">
            Footer
        </div>
    </div>
</div>
<script>
    const opt = {
        options: [{
                manufacturer: 'nintendo',
                value: "nes",
                name: "Nintendo Entertainment System"
            },
            {
                manufacturer: 'nintendo',
                value: "snes",
                name: "Super Nintendo Entertainment System"
            },
            {
                manufacturer: 'nintendo',
                value: "n64",
                name: "Nintendo 64"
            },
            {
                manufacturer: 'nintendo',
                value: "gamecube",
                name: "GameCube"
            },
            {
                manufacturer: 'nintendo',
                value: "wii",
                name: "Wii"
            },
            {
                manufacturer: 'microsoft',
                value: 'xss',
                name: 'Xbox Series S'
            },
            {
                manufacturer: 'nintendo',
                value: "wiiu",
                name: "Wii U"
            },
            {
                manufacturer: 'nintendo',
                value: "switch",
                name: "Switch"
            },
            {
                manufacturer: 'sony',
                value: 'ps1',
                name: 'PlayStation'
            },
            {
                manufacturer: 'sony',
                value: 'ps2',
                name: 'PlayStation 2'
            },
            {
                manufacturer: 'sony',
                value: 'ps3',
                name: 'PlayStation 3'
            },
            {
                manufacturer: 'sony',
                value: 'ps4',
                name: 'PlayStation 4'
            },
            {
                manufacturer: 'sony',
                value: 'ps5',
                name: 'PlayStation 5'
            },
            {
                manufacturer: 'microsoft',
                value: 'xbox',
                name: 'Xbox'
            },
            {
                manufacturer: 'microsoft',
                value: '360',
                name: 'Xbox 360'
            },
            {
                manufacturer: 'microsoft',
                value: 'xbone',
                name: 'Xbox One'
            },
            {
                manufacturer: 'microsoft',
                value: 'xsx',
                name: 'Xbox Series X'
            }
        ],
        optionGroupRegister: function(optgroup) {
            var capitalised = optgroup.charAt(0).toUpperCase() + optgroup.substring(1);
            var group = {
                label: 'Manufacturer: ' + capitalised
            };

            group[this.settings.optgroupValueField] = optgroup;

            return group;
        },
        optgroupField: 'manufacturer',
        labelField: 'name',
        searchField: ['name'],
        sortField: 'name',
        openOnFocus: false,

    }
    $('#select-console').selectize(opt);
    $('#select-console2').selectize(opt);
</script>

<body>

</body>

</html>