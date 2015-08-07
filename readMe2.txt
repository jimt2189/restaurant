BEFORE GETTING STARTED
- Have wordpress setup locally
- Be ready to use terminal and have Git set up ready

GETTING STARTED TO WORK ON THIS PROJECT

////////////
***Clone onto github, creating a copy of the repo to your own git account

1. Select the FORK button 
	TEST: Refresh your homepage to see that the file has been added as one of your repo

2. Navigate to your forked file on git and create a branch with a unique name besides master
	TEST: Refresh the page and select the drop down menu, you should see the master and branch files


///////////
***Clone to local

3. Create a folder on your desktop

4. Using your terminal on your local device, change directory to that folder

5. Copy the URL provided on the right side of this page 
	Note: It should be "https://github.com/jimt2189/restaurant.git"

6. Using your terminal, make a copy to your local device using the command below:
	git clone https://github.com/jimt2189/restaurant.git
	TEST: Check the local folder to verify that the files have been "pulled" to the folder

7. Use: git pull	
	NOTE: Use terminal to fetch updates from remote repo in the appropriate directory
	
//////////
***Sync the forked repo 

8. Using your terminal (while located IN the cloned repo locally), enter:
	git remote add upstream https://github.com/jimt2189/restaurant.git
	TEST: enter: git remote -v (this will show origin file pulling from which upstream)

//////////
***Navigate to Branch 

1. Enter the following on terminal:
	git checkout -b newBranchName
		where newBranchName is the name of your branch created in step 2
	
//////////
***MAKING UPDATES "push" your modifications (assuming you've made a few) to remote repo

1. Using terminal in the cloned local file directory, apply:
	git status
		anything displayed in red has not been updated to the repo, meaning we will need to add it with:
	git add .
		this will add all changes listed above to the index, next:
	git commit -m "comment and include the quotations"
		this will commit to the changes ready to update the remote repo
	git push	
		this will update the changes to the repo you are currently modifying
	TEST: Refresh the git page to see a dialogue of the changes you've just made
	
/////////
***MERGE CONFLICT
	occurs when the repo is attempted to be pushed before it can be updated and terminal will display:
	EXAMPLE:
		<<<<<<<<<
		Your edits are shown here
		=========
		Others' edits are shown here that were pushed before yours
		>>>>>>>>>
		
	1. git pull	
		fetch the updates and view the error as seen above
		
	2. Make the changes on the conflicted file locally, then: git push

***REMOVED FILE CONFLICT
	occurs when a file is removed before it can be updated
	
	1. Displaying the conflict by using: git status
	
	2A. Resolve by adding the file back using: git add, git commit -m "comment", git push
	2B. Resolve by removing the file using: git rm, git commit -m "comment", git push
	
	TEST: Reload the page to see changes on Git site
	
