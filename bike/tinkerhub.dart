class learnersandmentors {  
  var name;
  var subject;
  var select;
  var mentor;
  static var yy=0;
  static var sureshsir="10am - 11am";
  static var rameshsir="2pm - 4pm";
  static var dineeshsir="6pm - 7pm";
   learnersandmentors(name,select){
     this.name=name;
     print("Name: "+name);
     this.select=select;
   }
  addStacks(subject){
    this.subject=subject;
    print(this.subject);
  }
  setMentorOrLearner(){
    print("Rahul is a "+this.select);
  }
  setAvailableTime(){
    print("Available Mentors:");
    print("Suresh Sir is Available from "+sureshsir);
    print("Ramesh Sir is Available from "+rameshsir);
    print("Dineesh Sir is Available from "+dineeshsir);
  }
  getMentor(mentor,time){
    print("Selected Menter: ");
    print(mentor+ " Available from "+time);
  }
}
main() { 
learnersandmentors www = new learnersandmentors("Rahul","learner");
print("Stack of interest:");
www.addStacks("maths");
www.addStacks("Physics");
www.addStacks("chemistry");
www.setMentorOrLearner();
www.setAvailableTime();
www.getMentor("Suresh Sir","10am - 11am");  
  
  learnersandmentors www1 = new learnersandmentors("Ramu","learner");
print("Stack of interest:");
www1.addStacks("maths");
www1.addStacks("Physics");
www1.addStacks("chemistry");
www1.setMentorOrLearner();
www1.setAvailableTime();
www1.getMentor("Suresh Sir","10am - 11am");  
}
