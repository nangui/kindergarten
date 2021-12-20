<div style="width: 1120px;border:1px solid rgb(229, 231, 235);">
    <table class="table-fixed" autosize="2" style="width:1120px;border:1px solid rgb(229, 231, 235);border-collapse: collapse;text-indent: 0;">
        <thead>
        <tr style="width: 1120px;">
            <td colspan="2" style="position: relative;padding-top: 1rem;padding-bottom: 1rem;padding-right:1.5rem;padding-left:1.5rem;white-space: nowrap;">
                <div style="padding:64px;float: left;">
                    <h2 style="font-weight:bold;font-size: 1.5em;">College Anne-marie javouhey</h2>
                    <p style="width:400px;" class="font-bold">
                        Avenue Cheikh anta Diop<br>
                        B.P. 7035 - Dakar-Medina<br>
                        ** Facture {{ $arrayData['month'] }} {{ $arrayData['year']}}<br>
                    </p>
                </div>
            </td>
            <td style="position: relative;padding-top: 1rem;padding-bottom: 1rem;padding-right:1.5rem;padding-left:1.5rem;white-space: nowrap;">
                <div style="padding:64px;padding-left: 300px;float: right;">
                    <p>
                        <span style="font-weight: bold;">Nom responsable</span>
                        {{ $arrayData['tutor'] }}
                    </p>
                    <p>
                        <span style="font-weight: bold;">Nom élève: </span>
                        {{ $arrayData['pupil'] }}
                    </p>
                </div>
            </td>
        </tr>
        </thead>
        <tbody>
        <tr style="width:1120px;background-color: rgb(243, 244, 246);">
            <td style="letter-spacing: 0.05em;font-size: 0.75rem;line-height: 16px;font-weight: 500;text-transform: uppercase;padding-top: 0.75rem;padding-bottom: 0.75rem;padding-left: 1.5rem;padding-right: 1.5rem;">
                <div class="row" style="width:100%;color:#000;">
                    <p class="column">{{ $arrayData['class_desc'] }}</p>
                </div>
            </td>
            <td colspan="2" style="letter-spacing: 0.05em;font-size: 0.75rem;line-height: 16px;font-weight: 500;text-transform: uppercase;padding-top: 0.75rem;padding-bottom: 0.75rem;padding-left: 1.5rem;padding-right: 1.5rem;">
                <div class="row" style="width:100%;color:#000;">
                    <p class="column" style="font-weight: bold;">{{ $arrayData['pupil'] }}</p>
                </div>
            </td>
            <td style="letter-spacing: 0.05em;font-size: 0.75rem;line-height: 16px;font-weight: 500;text-transform: uppercase;padding-top: 0.75rem;padding-bottom: 0.75rem;padding-left: 1.5rem;padding-right: 1.5rem;">
                <div class="row" style="width:100%;color:#000;">
                    <p class="column" style="padding-left:64px;">{{ $arrayData['code'] }}</p>
                </div>
            </td>
        </tr>
        <tr style="width:1120px;display:flex;">
            <td style="height:300px;display: flex;border-left:1px solid rgb(229, 231, 235);width:40%;padding-top: 1rem;padding-bottom: 1rem;padding-right:1.5rem;padding-left:1.5rem;white-space: nowrap;">
                <p style="text-transform: uppercase;">Transport / Cantine</p>
            </td>
            <td style="border-left:1px solid rgb(229, 231, 235);height:300px;width: 10%;display: flex;padding-top: 1rem;padding-bottom: 1rem;padding-right:1.5rem;padding-left:1.5rem;white-space: nowrap;">
                <p style="width: 100%;text-transform: uppercase;text-align: right;">{{ number_format($arrayData['total'], 0, '.', ' ') }}</p>
            </td>
            <td style="height:300px;display: flex;border-left:1px solid rgb(229, 231, 235);width:40%;padding-top: 1rem;padding-bottom: 1rem;padding-right:1.5rem;padding-left:1.5rem;white-space: nowrap;">&nbsp;</td>
            <td style="height:300px;display: flex;border-left:1px solid rgb(229, 231, 235);width:10%;padding-top: 1rem;padding-bottom: 1rem;padding-right:1.5rem;padding-left:1.5rem;white-space: nowrap;">&nbsp;</td>
        </tr>
        <tr style="width:1120px;display:flex;">
            <td style="border-top:1px solid rgb(229, 231, 235);width: 90%;padding-top: 1rem;padding-right:1.5rem;padding-left:1.5rem;white-space: nowrap;" colspan="3">
                <p style="font-weight: bold;">TOTAL {{ $arrayData['pupil'] }}</p>
            </td>
            <td style="border-left:1px solid rgb(229,231,235);border-top:1px solid rgb(229,231,235);padding-left:1.5rem;">
                <p>{{ number_format($arrayData['total'], 0, '.', ' ') }}</p>
            </td>
        </tr>
        <tr style="width:1120px;display:flex;">
            <td style="width: 90%;padding-right:1.5rem;padding-left:1.5rem;white-space: nowrap;" colspan="3">
                <p>SOLDE PRECEDENT</p>
            </td>
            <td style="border-left:1px solid rgb(229,231,235);padding-left:1.5rem;">
                <p style="font-weight:bold;">{{ $arrayData['dept'] }}</p>
            </td>
        </tr>
        <tr style="width:1120px;">
            <td colspan="3" style="padding-left:1.5rem;">
                <p style="text-transform:uppercase;">Facture *obligatoire* pour le reglement</p>
            </td>
            <td style="border-left:1px solid rgb(229,231,235);">&nbsp;</td>
        </tr>
        <tr style="width:1120px;display:flex;">
            <td style="border-bottom:1px solid rgb(229,231,235);padding-bottom: 1rem;padding-right:1.5rem;padding-left:1.5rem;white-space: nowrap;" colspan="2">
                <p style="text-transform: uppercase;">Payé le {{ Carbon\Carbon::now()->format('d/m/Y') }}</p>
            </td>
            <td style="border-bottom:1px solid rgb(229,231,235);text-align:right;padding-right:1.5rem;">
                <p style="font-weight: bold;">Montant payé</p>
            </td>
            <td style="border-left:1px solid rgb(229,231,235);border-bottom:1px solid rgb(229,231,235);border-left:1px solid rgb(229,231,235);padding:1.5rem;">
                <p style="font-weight: bold;" class="total">
                    {{ number_format($arrayData['given_amount'], 0, '.', ' ') }}
                </p>
            </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td style="border-top:1px solid rgb(229, 231, 235);border-left:1px solid rgb(229, 231, 235);padding-top: 1rem;padding-bottom: 1rem;padding-right:1.5rem;padding-left:1.5rem;white-space: nowrap;" colspan="4">
                <p>{{ $arrayData['created_date'] }}</p>
            </td>
        </tr>
        <tr>
            <td style="padding-left: 1.5rem;padding-bottom:1.5rem;">
                <p style="text-transform: uppercase;">Payé</p>
            </td>
            <td>
                <p style="font-weight: bold;">
                    {{ number_format($arrayData['given_amount'], 0, '.', ' ') }}
                </p>
            </td>
            <td style="padding-right: 1.5rem;text-align:right;">
                <p>{{ $arrayData['code'] }}</p>
            </td>
            <td>
                <p style="padding-left: 4rem;">{{ Carbon\Carbon::now()->format('d/m/Y') }}</p>
            </td>
        </tr>
        </tfoot>
    </table>
</div>
