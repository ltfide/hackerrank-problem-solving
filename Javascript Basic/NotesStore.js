class NotesStore {
   //add your code here
   active = [];
   completed = [];
   others = [];
   addNote(state, name) {
      if (name === "") {
         throw `Error: Name cannot be empty`;
      }
      if (state == "active") {
         this.active.push(name);
      } else if (state == "completed") {
         this.completed.push(name);
      } else if (state == "others") {
         this.others.push(name);
      } else {
         throw `Error: Invalid state ${state}`;
      }

      return true;
   }

   getNotes(state) {
      if (state == "active") {
         if (this.active.length <= 0) {
            throw `No Notes`;
         }

         return this.active;
      } else if (state == "completed") {
         if (this.completed.length < 0) {
            throw `No Notes`;
         }

         return this.completed;
      } else if (state == "others") {
         if (this.others.length < 0) {
            throw `No Notes`;
         }

         return this.others;
      } else {
         throw `Error: Invalid state ${state}`;
      }
   }
}
