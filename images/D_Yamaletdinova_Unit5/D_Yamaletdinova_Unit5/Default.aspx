<%@ Page Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="Default.aspx.cs" 
    Inherits="D_Yamaletdinova_Unit5.Default" Theme="ThemeDiana" %>

    <asp:Content ID="headContent" ContentPlaceHolderID="head" Runat="Server">  
        <link href="Content/distyle.css" rel="stylesheet" />    
    </asp:Content>

     <asp:Content ID="formContent" ContentPlaceHolderID="formPlaceHolder" Runat="Server">
         <div id="content">
            <h1>Reservation Request</h1>
            <h3>Request Data</h3>
                    <p><span class="requiredfield">* means that the field is required</span></p>
                        <asp:Panel runat="server" DefaultButton="submitBtn" Width="780px">
                            <div class="formstyle" >
                            <div class="form-group">
                                <div class="determineSpace">
                                    <p><asp:Label ID="arrivalLbl" runat ="server" >Arrival date</asp:Label>
                                    <asp:CompareValidator ID="arrivalDateValidator" runat="server" 
                                        ErrorMessage=" must be after the arrival date"
                                        Operator="DataTypeCheck"
                                        Type="Date" 
                                        ControlToCompare="departureTxtBox"
                                        ControlToValidate="arrivalTxtBox"
                                        Display ="Dynamic" 
                                        SetFocusOnError="True"
                                        Font-Italic="True" 
                                        ForeColor="Red">
                                    </asp:CompareValidator>
                                 </p>
                                 <p><asp:TextBox ID="arrivalTxtBox" runat="server" CssClass="entry" ></asp:TextBox></p>
                            </div>
                        

                         <div class="determineSpace">
                            <p><asp:Label ID="departureLbl" runat ="server" >Departure date<span class="requiredfield">*</span></asp:Label>
                                <asp:CompareValidator ID="departureDateValidator" runat="server" 
                                    ErrorMessage=" must be after the arrival date"
                                    ControlToValidate="departureTxtBox"
                                    ControlToCompare ="arrivalTxtBox" 
                                    Operator="GreaterThan"
                                    Display ="Dynamic" 
                                    SetFocusOnError="True"
                                    Font-Italic="True" 
                                    ForeColor="Red">
                                </asp:CompareValidator>
                                <asp:RequiredFieldValidator id="departureReqValidator" runat="server"
                                  ControlToValidate="departureTxtBox"
                                  ErrorMessage="Departure date is required"
                                  Display ="Dynamic" 
                                  SetFocusOnError="True"
                                  Font-Italic="True" 
                                  ForeColor="Red">
                               </asp:RequiredFieldValidator>
                           </p>
                           <p><asp:TextBox ID="departureTxtBox" runat="server" CssClass="entry"></asp:TextBox></p>
                        </div>


                            <div class="determineSpace">
                                <p><asp:Label ID="peopleNumLbl" runat ="server" >Number of People</asp:Label></p>
                                    <asp:DropDownList ID="peopleNumDDL" runat="server"  CssClass="form-control" >
                                        <asp:ListItem Text="1" Value="1"></asp:ListItem>
                                        <asp:ListItem Text="2" Value="2"></asp:ListItem>
                                        <asp:ListItem Text="3" Value="3"></asp:ListItem>
                                        <asp:ListItem Text="4" Value="4"></asp:ListItem>
                                    </asp:DropDownList>
                            </div>

                    <div id="radioBtn">
                    <p><asp:Label ID="radioBtnLbl" runat ="server" >Bed Type:</asp:Label>
                    <asp:RadioButtonList ID="bedTypeRbt" runat="server" 
                        RepeatDirection="Horizontal" RepeatLayout="Table">
                        <asp:ListItem Text="King" Selected="True" Value="King"></asp:ListItem>
                        <asp:ListItem Text="Two Queen" Value="Two Queen"></asp:ListItem>
                        <asp:ListItem Text="One Queen" Value="One Queen"></asp:ListItem>
                    </asp:RadioButtonList></p>        
                </div>
                <h3>Special Request</h3>
                <div class="determineSpace">
                    <p><asp:TextBox id="specialRequestTxtBox"  CssClass="entry" TextMode="multiline" 
                        Columns="70" rows="2" runat="server"  /></p>
                </div>            
                <h3>Contact Information</h3>
                    <div class="">
                     <div class="determineSpace">
                      <p><asp:Label ID="firstNameLbl" runat ="server" >First name<span class="requiredfield">*</span></asp:Label>
                          <asp:RequiredFieldValidator id="firstNameValidator" runat="server"
                          ControlToValidate="firstNameTxtBox"
                          ErrorMessage="First name is required"
                          Display ="Dynamic" 
                          SetFocusOnError="True"
                          Font-Italic="True" 
                          ForeColor="Red">
                        </asp:RequiredFieldValidator>
                      </p>
                      <p><asp:TextBox ID="firstNameTxtBox" runat="server" CssClass="entry"></asp:TextBox></p>
                     </div>
                    </div>


                     <div class="determineSpace">
                      <p><asp:Label ID="lastNameLbl" runat ="server" >Last name<span class="requiredfield">*</span></asp:Label>
                          <asp:RequiredFieldValidator id="lastNameValidator" runat="server"
                          ControlToValidate="lastNameTxtBox"
                          ErrorMessage="Last name is required"
                          Display="Dynamic" 
                          SetFocusOnError="True"
                          Font-Italic="True" 
                          ForeColor="Red">
                          </asp:RequiredFieldValidator>
                      </p>
                      <p><asp:TextBox ID="lastNameTxtBox" runat="server" CssClass="entry"></asp:TextBox></p>
                     </div>



                     <div class="determineSpace">
                      <p><asp:Label ID="emailLbl" runat ="server" >Email address<span class="requiredfield">*</span></asp:Label>
                          <asp:RegularExpressionValidator 
                              ID="regexEmailValid" 
                              runat="server" 
                              ValidationExpression="^\w+[\w-\.]*\@\w+((-\w+)|(\w*))\.[a-z]{2,3}$" 
                              ControlToValidate="emailTxtBox" 
                              ErrorMessage="  Invalid Email Format" 
                              Display="Dynamic" 
                              SetFocusOnError="True"
                              ForeColor="Red" 
                              Font-Italic="True" 
                              Font-Size="Smaller"></asp:RegularExpressionValidator>
                              <asp:RequiredFieldValidator id="emailValidator" runat="server"
                              ControlToValidate="emailTxtBox"
                              ErrorMessage="Email address is required"
                              Display="Dynamic" 
                              SetFocusOnError ="True"
                              Font-Italic ="True" 
                              ForeColor  ="Red">
                          </asp:RequiredFieldValidator>
                      </p>
                      <p><asp:TextBox ID="emailTxtBox" runat="server" CssClass="entry"></asp:TextBox></p>
                     </div>



                     <div class="determineSpace">
                      <p><asp:Label ID="phoneLbl" runat ="server" >Telephone number<span class="requiredfield">*</span></asp:Label>
                      <asp:RegularExpressionValidator 
                          ID="regexPhoneValid" 
                          runat="server" 
                          ControlToValidate="phoneTxtBox" 
                          ValidationExpression="((\(\d{3}\) ?)|(\d{3}-))?\d{3}-\d{4}"
                          ErrorMessage ="  Use the format 999-999-999" 
                          Display="Dynamic" 
                          SetFocusOnError="True"
                          ForeColor="Red" 
                          Font-Italic="True" 
                          Font-Size="Smaller">
                      </asp:RegularExpressionValidator>
                      <asp:RequiredFieldValidator id="PhoneValidator" runat="server"
                          ControlToValidate="phoneTxtBox"
                          ErrorMessage="Telephone number is required"
                          Display="Dynamic" 
                          SetFocusOnError="True"
                          Font-Italic="True" 
                          ForeColor="Red">
                      </asp:RequiredFieldValidator>
                         </p>
                       <p><asp:TextBox ID="phoneTxtBox" runat="server" CssClass="entry"></asp:TextBox></p>
                     </div>

                     <div class="determineSpace">
                        <p><asp:Label ID="Label1" runat ="server" >Preferred method</asp:Label></p>
                        <asp:DropDownList ID="preferredDDL" runat="server"  CssClass="form-control" Width="520px" >
                            <asp:ListItem Text="Email" Selected="True" Value="Email"></asp:ListItem>
                            <asp:ListItem Text="Phone" Value="Phone"></asp:ListItem>
                        </asp:DropDownList>
                     </div>


                    <div class="determineSpace">
                        <!--Buttons -->
                        <asp:Button ID="submitBtn" CssClass="button" runat="server" Text="Submit" 
                            OnClick="submitBtn_Click"  />
                        <asp:Button ID="btnClear" CssClass="button" runat="server" CausesValidation="False" 
                            Text="Clear" OnClick="btnClear_Click"  />
                    </div>
                    <br />
                    <div class="determineSpace" >
                        <asp:Label ID="lblMessage" runat="server"
                            ForeColor="Green"></asp:Label> 
                    </div>
    </div> 
 </div>     
 </asp:Panel>                       
</div>
</asp:Content>



