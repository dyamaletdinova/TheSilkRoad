using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
/* 
 * Confirmation class to sets and display the data when the user was redirected to the confirmation page.
 * */
namespace D_Yamaletdinova_Unit5
{
    public partial class Confirmation : System.Web.UI.Page
    {
        Reservation reservation = new Reservation();
        protected void Page_Load(object sender, EventArgs e)
        {
            reservation = Reservation.GetReservationData();//gets the data from the reservation class

            if (!IsPostBack)
                this.DisplayReservationData(); //display the reservation data
        }
        /*
         * Method displays the reservation data fron the Reservation object
         * */
        public void DisplayReservationData()
        {
           //contact info
            firstNameConf.Text = reservation.FirstName;
            lastNameConf.Text = reservation.LastName;
            emailConf.Text = reservation.Email;
            phoneConf.Text = reservation.Phone;
            preferredMethodConf.Text = reservation.PreferredMethod;
            ////Request Data
            arivalDateConf.Text = reservation.ArrivalDate.ToShortDateString();
            departureDateConf.Text = reservation.DepartureDate.ToShortDateString();
            daysNumConf.Text = reservation.NoOfDays.ToString();

            bedTypeConf.Text = reservation.BedType;
            specialReqConf.Text = reservation.SpecialRequests;
            peopleNumConf.Text = reservation.NoOfPeople.ToString();
        }
        /*
         * Method that displays the confirmation message ot the user 
         * when the data is subimtted and confirmed
         * */
        protected void confirmBtn_Click(object sender, EventArgs e)
        {
            if (IsValid)
            {
                lblMessage.Text = "Thank you for your request. We will get back to you within 24 hours.";
                lblMessage.Focus();
            }
        }
    }
}