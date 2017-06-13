/** =========================================================

 Diana Yamaletdinova

 Operating System: Windows 7

 Microsoft Visual Studio 2013 Pro

 CIS 174

 Name Of homework Assignment: Unit 5 Programming Assignment

 Program Description: Reservation form using the ASP.NET Controls

 Academic Honesty:

 I attest that this is my original work.

 I have not used unauthorized source code, either modified or unmodified.

 I have not given other fellow student(s) access to my program.

=========================================================== **/
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace D_Yamaletdinova_Unit5
{
    public partial class Default : System.Web.UI.Page
    {
        private Reservation reservation = new Reservation();

        protected void Page_Load(object sender, EventArgs e)
        {
            
            if (!IsPostBack)
            {  
               UnobtrusiveValidationMode = System.Web.UI.UnobtrusiveValidationMode.None;
               arrivalTxtBox.Text = DateTime.Today.ToShortDateString();
               modifyInput(); //caling the modify input when the page was redirected from the confirmation page - 
                             //it loads all the data into the form
                //if the cookie first name is not null display the message
                if ( ! (Request.Cookies["FirstName"] == null))
                {
                    //lblWelcome.Text = "Welcome back, " + Request.Cookies["FirstName"].Value + "!";
                    //lblWelcomeEmail.Text = "LogIn, " + cookieEmail.Value + "!";
                }
            }
            else //if you are not IsPostBack - clear the cookie
            {
                clearCookie();
            }
        }

        /*
         * Method that adds the cookie 
         * */
        private void addCookie()
        {
            HttpCookie nameCookie = new HttpCookie("FirstName", firstNameTxtBox.Text);
            nameCookie.Expires = DateTime.Now.AddYears(1);
            Response.Cookies.Add(nameCookie);
        }

        /*
         * Method that clears the cookie session
         * */
        private void clearCookie()
        {
            HttpCookie nameCookie = new HttpCookie("FirstName");
            nameCookie.Expires = DateTime.Now.AddYears(-1);
            Response.Cookies.Add(nameCookie);
            //lblWelcome.Text = "";
        }

        /*
         * Method that clears user's input
         * and it also clears the session and deletes all the data from it
         * */
        protected void btnClear_Click(object sender, EventArgs e)
        {
            arrivalTxtBox.Text = "";
            departureTxtBox.Text = "";
            specialRequestTxtBox.Text = "";
            firstNameTxtBox.Text = "";
            lastNameTxtBox.Text = "";
            emailTxtBox.Text = "";
            phoneTxtBox.Text = "";
            regexPhoneValid.Text = "";
            regexPhoneValid.Text = "";
            bedTypeRbt.SelectedValue = "1";
            preferredDDL.SelectedIndex = 0;
            peopleNumDDL.SelectedIndex = 0;
            arrivalTxtBox.Text = DateTime.Today.ToShortDateString();
            clearCookie();
        }

        /*
         * Method sends the data to the session by calling the saveInSession() method 
         * also if the page is valid it proceeds
         * */
        protected void submitBtn_Click(object sender, EventArgs e)
        {
            if (!IsValid)
            {
                addCookie();
                saveInSession();
                Response.Redirect("Default.aspx", false);
            }
            else //if page is valid - redirect to the Confirm page
            {
                addCookie();
                saveInSession();
                Response.Redirect("Confirmation.aspx", false);   
             }
         }

        /* Method that calculates the dates between 
         * the arrival date and the departure date
         * */
        public int calculateDays()
        {
            TimeSpan tsDays = reservation.DepartureDate - reservation.ArrivalDate;
            int days = tsDays.Days;
            return days; //return days
        }


        /* 
         * Saves the data to the RESERVATION class as soon as the user enters the data
         * then the reservation class saves data to the session
         * */
        protected void saveInSession()
        {
            //Request Data
            reservation.ArrivalDate = DateTime.Parse(arrivalTxtBox.Text);
            reservation.DepartureDate = DateTime.Parse(departureTxtBox.Text);
            reservation.NoOfPeople = Convert.ToInt32(peopleNumDDL.SelectedValue);
            reservation.BedType = bedTypeRbt.SelectedValue;
            //special request
            reservation.SpecialRequests = validateFields();
            //contact info
            reservation.FirstName = firstNameTxtBox.Text;
            reservation.LastName = lastNameTxtBox.Text;
            reservation.Phone = phoneTxtBox.Text;
            reservation.Email = emailTxtBox.Text;
            reservation.PreferredMethod = preferredDDL.SelectedValue;
            reservation.NoOfDays = calculateDays();

            Session["Reservation"] = reservation;
        }

        /* Method that validates the special request field
         * if the fiels s empty the strin NONE is assigned
         * */
        protected string validateFields()
        {
            if (specialRequestTxtBox.Text == "")
            {
                specialRequestTxtBox.Text = "None";
            }
            return specialRequestTxtBox.Text;
        }

        /* Method that gets the data from the reservation class and displays it in the textfields when 
         * the user clicks Modify button. 
         * */
        protected void modifyInput()
        {
            //check if the reservation method != null
            if (Session["Reservation"] != null)
            {
                Reservation reservation = (Reservation)Session["Reservation"];
                arrivalTxtBox.Text = reservation.ArrivalDate.ToShortDateString();
                departureTxtBox.Text = reservation.DepartureDate.ToShortDateString();
                peopleNumDDL.SelectedValue = reservation.NoOfPeople.ToString();
                bedTypeRbt.SelectedValue = reservation.BedType;
                specialRequestTxtBox.Text = reservation.SpecialRequests;
                firstNameTxtBox.Text = reservation.FirstName;
                lastNameTxtBox.Text = reservation.LastName;
                emailTxtBox.Text = reservation.Email;
                phoneTxtBox.Text = reservation.Phone;
                preferredDDL.SelectedValue = reservation.PreferredMethod;
            }
        }
    }
}