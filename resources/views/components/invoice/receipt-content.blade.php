<div style="padding:2mm;margin: 0 auto;width: 72mm;background: #FFF;">
    <h1 style="font-size: .9em;float: left;font-weight: bold;">Anne Marie Javouhey</h1>
    <br>
    <p style="border-top: 1px solid rgb(229,231,235);padding-top: 2mm;padding-bottom: 2mm;">
        Avenue Cheikh anta Diop<br>
        B.P. 7035 - Dakar-Medina<br>
        Date: <span style="font-weight: bold;">{{ $arrayData['month'] }} {{ $arrayData['year']}}</span> <br>
        Heure: <span style="font-weight: bold;">{{ $arrayData['hour'] }}</span> <br>
    </p>
    <table style="width: 100%; border-top: 1px solid rgb(229,231,235);">
        <tr>
            <td style="padding-top:4mm;">Année académique:</td>
            <td style="padding-top:4mm;text-align: right;vertical-align:bottom;">
                <span style="font-weight: bold;">{{ $arrayData['year_desc'] }}</span> <br>
            </td>
        </tr>
        <tr>
            <td style="padding-top:4mm;">Code élève:</td>
            <td style="padding-top:4mm;text-align: right;vertical-align:bottom;">
                <span style="font-weight: bold;">{{ $arrayData['code'] }}</span> <br>
            </td>
        </tr>
        <tr>
            <td style="padding-top:4mm;">Classe:</td>
            <td style="padding-top:4mm;text-align: right;vertical-align:bottom;">
                <span style="font-weight: bold;">{{ $arrayData['class_desc'] }}</span> <br>
            </td>
        </tr>
        <tr>
            <td style="padding-top:4mm;">Nom:</td>
            <td style="padding-top:4mm;text-align: right;vertical-align:bottom;">
                <span style="font-weight: bold;">{{ $arrayData['last_name'] }}</span> <br>
            </td>
        </tr>
        <tr>
            <td style="padding-top:4mm;">Prénom:</td>
            <td style="padding-top:4mm;text-align: right;vertical-align:bottom;">
                <span style="font-weight: bold;">{{ $arrayData['first_name'] }}</span> <br>
            </td>
        </tr>
        <tr>
            <td style="padding-top:4mm;">Raison:</td>
            <td style="padding-top:4mm;text-align: right;vertical-align:bottom;">
                <span style="font-weight: bold;">Transport/Cantine</span> <br>
            </td>
        </tr>
        <tr>
            <td style="padding-top:4mm;">Montant:</td>
            <td style="padding-top:4mm;text-align: right;vertical-align:bottom;">
                <span style="font-weight: bold;">{{ number_format($arrayData['given_amount'], 0, '.', ' ') }} FCFA</span> <br>
            </td>
        </tr>
    </table>
</div>
