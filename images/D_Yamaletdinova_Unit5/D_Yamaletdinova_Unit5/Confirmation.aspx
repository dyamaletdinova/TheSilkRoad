<%@ Page Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="Confirmation.aspx.cs" 
    Inherits="D_Yamaletdinova_Unit5.Confirmation" Theme="ThemeDiana" %>


<asp:Content ID="headContent" ContentPlaceHolderID="head" Runat="Server">  
        <link href="Content/distyle.css" rel="stylesheet" />    
    </asp:Content>

     <asp:Content ID="formContent" ContentPlaceHolderID="formPlaceHolder" Runat="Server">
         <div id="content">
            <div class="determineSpace">
                <div id="messageresult">
                    <asp:Label ID="lblMessage" runat="server"
                        ForeColor="Green"></asp:Label> 
                </div>
            </div>
        <h1 class ="confstyle">Request Conformation</h1>
        <h3 class ="confstyle">Please confirm your reservation request</h3>

    <div class="formstyle" >
    <div class="form-group">


            <div class="determineSpace">
                <p><asp:Label ID="firstName" runat="server" Text="First Name:"></asp:Label>
                <asp:Label ID="firstNameConf" runat="server" Text="" CssClass ="fromsession"></asp:Label></p>
            </div>

            <div class="determineSpace">
               <p> <asp:Label ID="lastName" runat="server" Text="Last Name:"></asp:Label>
                <asp:Label ID="lastNameConf" runat="server" Text="" CssClass ="fromsession"></asp:Label></p>
            </div>

        
            <div class="determineSpace">
                <p><asp:Label ID="email" runat="server" Text="Email:"></asp:Label>
                <asp:Label ID="emailConf" runat="server" Text="" CssClass ="fromsession"></asp:Label></p>
            </div>

            <div class="determineSpace">
                <p><asp:Label ID="phone" runat="server" Text="Phone:"></asp:Label>
                <asp:Label ID="phoneConf" runat="server" Text="" CssClass ="fromsession"></asp:Label></p>
            </div>

            <div class="determineSpace">
                <p><asp:Label ID="preferredMethod" runat="server" Text="Preffered method:"></asp:Label>
                <asp:Label ID="preferredMethodConf" runat="server" Text="" CssClass ="fromsession"></asp:Label></p>
            </div>

            <h3 class ="confstyle">Request Data</h3>
             

            <div class="determineSpace">
                <p><asp:Label ID="arivalDate" runat="server" Text="Arrival date:"></asp:Label>
                <asp:Label ID="arivalDateConf" runat="server" Text="" CssClass ="fromsession"></asp:Label></p>
            </div>

            <div class="determineSpace">
                <p><asp:Label ID="departureDate" runat="server" Text="Departure date:"></asp:Label>
                <asp:Label ID="departureDateConf" runat="server" Text="" CssClass ="fromsession"></asp:Label></p>
            </div>

            <div class="determineSpace">
                <p><asp:Label ID="daysNum" runat="server" Text="No. of days:"></asp:Label>
                <asp:Label ID="daysNumConf" runat="server" Text="" CssClass ="fromsession"></asp:Label></p>
            </div>     


            <div class="determineSpace">
                <p><asp:Label ID="peopleNum" runat="server" Text="No. of people:"></asp:Label>
                <asp:Label ID="peopleNumConf" runat="server" Text="" CssClass ="fromsession"></asp:Label></p>
            </div>     

            <div class="determineSpace">
               <p> <asp:Label ID="bedType" runat="server" Text="Bed type:"></asp:Label>
                <asp:Label ID="bedTypeConf" runat="server" Text="" CssClass ="fromsession"></asp:Label></p>
            </div>

            <div class="determineSpace">
                <p><asp:Label ID="specialReq" runat="server" Text="Special request:"></asp:Label>
                <asp:Label ID="specialReqConf" runat="server" Text="" CssClass ="fromsession"></asp:Label></p>
            </div>

            <div class="determineSpace">
               <p> <asp:Button ID="confirmBtn" CssClass="button" runat="server" Text="Confirm Request"  OnClick="confirmBtn_Click" />
                <asp:Button ID="Button1" CssClass="button" runat="server" Text="Modify Request" PostBackUrl="~/Default.aspx"  /></p>
            </div>
             <br />
        </div>

    </div>
</div>
    </asp:Content>