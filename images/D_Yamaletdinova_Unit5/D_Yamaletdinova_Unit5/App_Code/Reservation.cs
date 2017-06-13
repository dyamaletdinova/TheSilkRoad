using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Web;


/*Reservation saves all the data to to Reservation class*/
namespace D_Yamaletdinova_Unit5
{
    class Reservation
    {
        public Reservation() { }

        public DateTime ArrivalDate
        {
            get;
            set;
        }
        public DateTime DepartureDate
        {
            get;
            set;
        }
        public int NoOfDays
        {
            get;
            set;
        }
        public int NoOfPeople
        {
            get;
            set;
        }
        public string BedType
        {
            get;
            set;
        }
        public string SpecialRequests
        {
            get;
            set;
        }
        public string FirstName
        {
            get;
            set;
        }
        public string LastName
        {
            get;
            set;
        }
        public string Email
        {
            get;
            set;
        }
        public string Phone
        {
            get;
            set;
        }
        public string PreferredMethod
        {
            get;
            set;
        }

        //static method to get reservation data object from session
        public static Reservation GetReservationData()
        {
            Reservation reservationData = (Reservation)HttpContext.Current.Session["Reservation"];
            if (reservationData == null)
                HttpContext.Current.Session["Reservation"] = new Reservation();
            return (Reservation)HttpContext.Current.Session["Reservation"];
        }

    }
}
