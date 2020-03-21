 <td width=""""146""""><img src=""git.png"" width=""142"" height=""148"" alt=""""/></td>
              <td width=""854"" align=""left"" bgcolor=""#070707"" style=""font: Times New Roman; color: #F8F8F8; font-size: 36px; font-style: italic; font-weight: 400; text-align: center;""> <h1 style=""font-size: 34px""> KLS GIT MCA ELECTIVE SELECTION </h1> </td>
              
            </tr>
            <tr bgcolor=""#F8F8F8"">
                <td height=""33"" colspan=""2"" bgcolor=""#FFFFFF"">
                
                <p>&nbsp;</p>
                <marquee> <h2 style=""color: #0200F9""> Limited seats for each electives. Hurry up! </h2> </marquee>
                 <form id=""form1"" name=""form1"" method=""post"" enctype=""multipart/form-data"">
                <table width=""500"" border=""0"" align=""center"" cellpadding=""5"" cellspacing=""5"">
                  <tbody>
                    <tr>
                      <td width=""404"" bgcolor=""#FFFFFF""> <h2 style=""text-align: center; font: Times New Roman;""> Fill your details </h2></td>
                    </tr>
                    <tr>
                      <td bgcolor=""#AFAFAF"" style=""font-weight: bold"">Name</td>
                    </tr>
                    <tr>
                	<td style=""font-weight: bold""><input name=""name"" type=""text"" required=""required"" id=""name"" pattern=""[a-zA-Z\s]+"" title=""Accepts lowercase,uppercase &amp; space""></td>
               	   </tr>
                    <tr>
                      <td bgcolor=""#AFAFAF"" style=""font-weight: bold"">Division</td>
                    </tr>
                    <tr>
                      <td style=""font-weight: bold"">
                        <label>
                          <input type=""radio"" name=""division"" required=""required"" value=""A"" id=""division_0"">
                          A</label>
                        <br>
                        <label>
                          <input type=""radio"" name=""division"" required=""required"" value=""B"" id=""division_1"">
                          B</label>
                        <br>
                      </td>
                    </tr>
                    <tr>
                      <td bgcolor=""#AFAFAF"" style=""font-weight: bold"">Elective 1</td>
                    </tr>
                    <tr>
                      <td style=""font-weight: bold""><p>
                        <label>
                          <input type=""radio"" name=""elective1"" required=""required"" value=""adbms"" id=""elective1_0"">
                          Advanced Database Management System(ADBMS) </label>
                        <br>
                        <label hidden = $choiceiot>
                          <input name=""elective1"" type=""radio"" required=""required"" id=""elective1_1"" value=""iot"" onLoad=""return elective1()"">
                          Internet of Things(IoT)</label>
                        <br>
                        <label>
                          <input type=""radio"" name=""elective1"" required=""required"" value=""spm"" id=""elective1_2"">
                          Software Project Management(SPM)</label>
                        <br>
                        <label>
                          <input type=""radio"" name=""elective1"" required=""required"" value=""sc"" id=""elective1_3"">
                          Soft Computing(SC)</label>
                        <br>
                      </p></td>
                    </tr>
                    <tr>
                      <td bgcolor=""#AFAFAF"" style=""font-weight: bold"">Elective 2</td>
                    </tr>
                    <tr>
                      <td style=""font-weight: bold""><p>
                        <label>
                          <input type=""radio"" name=""elective2"" required=""required"" value=""isn"" id=""elective2_0"">
                          Information Storage Network(ISN)</label>
                        <br>
                        <label hidden= $choicemvc>
                          <input type=""radio"" name=""elective2"" required=""required"" value=""adumvcf"" id=""elective2_1"" onLoad=""return elective2()"">
                          Application Development using MVC Framework(ADUMVCF)</label>
                        <br>
                        <label>
                          <input type=""radio"" name=""elective2"" required=""required"" value=""csc"" id=""elective2_2"">
                          Client-Server Computing(CSC)</label>
                        <br>
                        <label>
                          <input type=""radio"" name=""elective2"" required=""required"" value=""dm"" id=""elective2_3"">
                          Digital Marketing(DM)</label>
                        <br>
                      </p></td>
                    </tr>
                    <tr>
                      <td bgcolor=""#AFAFAF"" style=""font-weight: bold"">USN</td>
                    </tr>
                    <tr>
                      <td style=""font-weight: bold""><input name=""usn"" type=""text"" required=""required"" id=""usn"" pattern=""^2G([A-Z])([0-9])([0-9])MCA([0-9])([0-9])$"" title=""Accepts Uppercase, numbers and alphabets ex: 2GI18MCA57 ""></td>
                    </tr>
                    <tr style=""text-align: center; font-size: 16px;"">
                      <td bgcolor=""#AFAFAF"" style=""font-weight: bold""><input type=""submit"" name=""submit"" id=""submit"" value=""Submit""></td>
                    </tr>
                  </tbody>
                </table>
                </form>
                <p>&nbsp;</p>
              </td>
            </tr>
            <tr>
               <td colspan=""2"" align=""center"" bgcolor=""#070707"" style=""color: #FFFFFF; font-size: 12px; font-weight: bold;""> Copyright protected under KLS GIT MCA @ 2020</td>
            </tr>
        </tbody>
</table>


$servername="localhost";
  $username="id12494755_deepagitmca";
  $password="deepagitmca";
  $database="id12494755_electiveselection";