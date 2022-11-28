using System;
using System.ComponentModel.DataAnnotations;

namespace BPCalculator
{
    // BP categories
    public enum BPCategory
    {
        [Display(Name="Low Blood Pressure")] Low,
        [Display(Name="Ideal Blood Pressure")]  Ideal,
        [Display(Name="Pre-High Blood Pressure")] PreHigh,
        [Display(Name ="High Blood Pressure")]  High
    };

    public class BloodPressure
    {
        public const int SystolicMin = 70;
        public const int SystolicMax = 190;
        public const int DiastolicMin = 40;
        public const int DiastolicMax = 100;

        [Range(SystolicMin, SystolicMax, ErrorMessage = "Invalid Systolic Value")]
        public int Systolic { get; set; }                       // mmHG

        [Range(DiastolicMin, DiastolicMax, ErrorMessage = "Invalid Diastolic Value")]
        public int Diastolic { get; set; }                      // mmHG

        // calculate BP category
        public BPCategory Category
        {
            get
            {
                //if Systolic between 190(SystolicMax) and 140(inclusive) AND Diastolic between 100(DiastolicMax) and 90(inclusive)
                if ((Systolic <= SystolicMax && Systolic >= 140) && (Diastolic <= DiastolicMax && Diastolic >= 90)
                    //High result
                   return BPCategory.High;
                else
                //if Sysyolic between 120(inclusive) and 140 AND Diastolic between 80(inclusive) and 90
                if ((Systolic >= 120 && Systolic < 140) && (Diastolic >= 80 && Diastolic < 90)
                    //Pre-high result
                    return BPCategory.PreHigh;
                else
                //if Systolic between 90(inclusive) and 120 AND Diastolic between 60(inclusive) and 80
                if ((Systolic >= 90 && Systolic < 120) && (Diastolic >= 60 && Diastolic < 80)
                    //Ideal result
                    return BPCategory.Ideal;
                else
                //if Systolic between 70(inclusive) and 90 AND Diastolic between 40(inclusive) and 60
                if ((Systolic >= SystolicMin && Systolic < 90) && (Diastolic >= DiastolicMin && Diastolic < 60))
                    //Low result
                    return BPCategory.Low;
            }
        }
    }
}
