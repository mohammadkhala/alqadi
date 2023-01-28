@section('title')
    report
@endsection
<form action="{{route('admin.customer.store')}}" method="post">
<p style="text-align: justify;"><strong>visit information report&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </strong><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</strong> <img style="float: right;" src=" {{ asset('assets/img/alqadilogo.jpg') }}" alt="" width="150" height="150" /></p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;">Patient information:&nbsp;</p>
<table style="border-collapse: collapse; width: 99.5739%; height: 31px;" border="1">
<tbody>
<tr style="height: 13px;">
<td style="width: 8.36976%; height: 13px;">National id</td>
<td style="width: 19.1412%; height: 13px;">&nbsp;<input type="text" name="{{$customer->personal_id}}" /></td>
<td style="width: 12.4454%; height: 13px;">Patient name</td>
<td style="width: 28.7482%; height: 13px;">&nbsp;<input type="text" /></td>
</tr>
<tr style="height: 18px;">
<td style="width: 8.36976%; height: 18px;">Birth date</td>
<td style="width: 19.1412%; height: 18px;">&nbsp; <input type="text" /></td>
<td style="width: 12.4454%; height: 18px;">Gender</td>
<td style="width: 28.7482%; height: 18px;">&nbsp;<input type="text" /></td>
</tr>
</tbody>
</table>
<p>Encounter information :</p>
<table style="border-collapse: collapse; width: 91.6458%; height: 54px;" border="1">
<tbody>
<tr style="height: 18px;">
<td style="width: 16.6667%; height: 18px;">Enc.date</td>
<td style="width: 16.6667%; height: 18px;">&nbsp;<input type="date" /></td>
<td style="width: 16.6667%; height: 18px;">Enc.time</td>
<td style="width: 14.536%; height: 18px;">&nbsp;<input type="time" /></td>
<td style="width: 18.7974%; height: 18px;">Enc.clinic</td>
<td style="width: 16.6667%; height: 18px;">&nbsp;<input type="text" /></td>
</tr>
<tr>
<td style="width: 16.6667%;">Plan</td>
<td style="width: 16.6667%;" colspan="5">&nbsp;</td>
</tr>
</tbody>
</table>
<p>Patient Complain :</p>
<table style="border-collapse: collapse; width: 100%; height: 100px;" border="1">
<tbody>
<tr>
<td style="width: 57.339%;">&nbsp; <textarea id="" cols="30" name="" rows="3"></textarea></td>
</tr>
</tbody>
</table>
<p>Eye Vision :</p>
<table style="border-collapse: collapse; width: 74.3506%; height: 67px;" border="1">
<tbody>
<tr style="height: 16px;">
<td style="width: 10%; height: 16px; text-align: center;">
<p>Added</p>
<p>By</p>
</td>
<td style="width: 10%; height: 16px; text-align: center;">
<p>Added</p>
<p>Date</p>
</td>
<td style="width: 10.2616%; height: 16px; text-align: center;">Right Without Corr.</td>
<td style="width: 5.77875%; height: 16px; text-align: center;">Left Without Corr.</td>
<td style="width: 7.67817%; height: 16px; text-align: center;">Right With Corr.</td>
<td style="width: 7.51837%; height: 16px; text-align: center;">
<p>Left With Corr.</p>
</td>
<td style="width: 6.82589%; height: 16px; text-align: center;">Corrected By</td>
</tr>
<tr style="height: 51px;">
<td style="width: 10%; height: 51px;">&nbsp;<input id="" name="" size="15px" type="text" /></td>
<td style="width: 10%; height: 51px;">&nbsp;<input size="10px" type="date" /></td>
<td style="width: 10.2616%; height: 51px;">&nbsp;<input id="" name="right_eye_without_corr" size="12px" type="text" /></td>
<td style="width: 5.77875%; height: 51px;">&nbsp;<input id="" name="" size="15px" type="text" /></td>
<td style="width: 7.67817%; height: 51px;">&nbsp;<input id="" name="" size="15px" type="text" /></td>
<td style="width: 7.51837%; height: 51px;">&nbsp;<input id="" name="" size="15px" type="text" /></td>
<td style="width: 6.82589%; height: 51px;">&nbsp;<input id="" name="" size="15px" type="text" /></td>
</tr>
</tbody>
</table>
<p>Eye Examination :</p>
<p>&nbsp;N/A&nbsp; &nbsp; &nbsp; Reason:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Right&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Left&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; N/A&nbsp; &nbsp; &nbsp; &nbsp; Reason&nbsp;</p>
<table id="tbl" style="border-collapse: collapse; width: 100.142%; height: 291px;" border="1">
<tbody>
<tr style="height: 18px;">
<td style="width: 33.3333%; height: 18px;">R.Note</td>
<td style="width: 33.3333%; height: 18px;">L.Note</td>
</tr>
<tr style="height: 18px;">
<td style="width: 33.3333%; height: 18px;">&nbsp;<textarea name="" id="" cols="50" rows="20"></textarea></td>
<td style="width: 33.3333%; height: 18px;">&nbsp;<textarea name="" id="" cols="50" rows="20"></textarea></td>
</tr>

</tbody>
</table>
<p><input id="printbtn" class="button" type="submit" value="Add another line" /></p>
<p><br /><br /></p>

<p>Signature:</p>
<button type="submit" class="btn btn-primary">
    <i class="la la-check-square-o"></i> حفظ
</button>
</form>

<button onclick="  window.print();" id="printbtn" class="print-button" type="button"> <span
        class="print-icon"> </button>



<style type="text/css">
    @media print {
        #printbtn {
            display: none;
        }
    }
</style>
<style>
    button.print-button {
        width: 100px;
        height: 100px;
    }

    span.print-icon,
    span.print-icon::before,
    span.print-icon::after,
    button.print-button:hover .print-icon::after {
        border: solid 4px #333;
    }

    span.print-icon::after {
        border-width: 2px;
    }

    button.print-button {
        position: relative;
        padding: 0;
        border: 0;

        border: none;
        background: transparent;
    }

    span.print-icon,
    span.print-icon::before,
    span.print-icon::after,
    button.print-button:hover .print-icon::after {
        box-sizing: border-box;
        background-color: #fff;
    }

    span.print-icon {
        position: relative;
        display: inline-block;
        padding: 0;
        margin-top: 20%;

        width: 60%;
        height: 35%;
        background: #fff;
        border-radius: 20% 20% 0 0;
    }

    span.print-icon::before {
        content: "";
        position: absolute;
        bottom: 100%;
        left: 12%;
        right: 12%;
        height: 110%;

        transition: height .2s .15s;
    }

    span.print-icon::after {
        content: "";
        position: absolute;
        top: 55%;
        left: 12%;
        right: 12%;
        height: 0%;
        background: #fff;
        background-repeat: no-repeat;
        background-size: 70% 90%;
        background-position: center;
        background-image: linear-gradient(to top,
                #fff 0, #fff 14%,
                #333 14%, #333 28%,
                #fff 28%, #fff 42%,
                #333 42%, #333 56%,
                #fff 56%, #fff 70%,
                #333 70%, #333 84%,
                #fff 84%, #fff 100%);

        transition: height .2s, border-width 0s .2s, width 0s .2s;
    }

    button.print-button:hover {
        cursor: pointer;
    }

    button.print-button:hover .print-icon::before {
        height: 0px;
        transition: height .2s;
    }

    button.print-button:hover .print-icon::after {
        height: 120%;
        transition: height .2s .15s, border-width 0s .16s;
    }
</style>
<script>
    function addField(table) {

        var tableRef = document.getElementById(table);
        var newRow = tableRef.insertRow(-1);

        var newCell = newRow.insertCell(0);
        var newElem = document.createElement('input');
        newElem.setAttribute("name", "links");
        newElem.setAttribute("type", "text");
        newCell.appendChild(newElem);

        newCell = newRow.insertCell(1);
        newElem = document.createElement('input');
        newElem.setAttribute("name", "keywords");
        newElem.setAttribute("type", "text");
        newCell.appendChild(newElem);

        newCell = newRow.insertCell(2);
        newElem = document.createElement('input');
        newElem.setAttribute("name", "violationtype");
        newElem.setAttribute("type", "text");
        newCell.appendChild(newElem);


    }
</script>
