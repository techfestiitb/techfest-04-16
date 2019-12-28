git config --global user.name "Paras Jain Techfest"
git config --global user.email "parasj.techfest@gmail.com"

Create a new repository
git clone https://gitlab.com/techfest/test.git
cd test
touch README.md
git add README.md
git commit -m "add README"
git push -u origin master

Push an existing folder
cd existing_folder
git init
git remote add origin https://gitlab.com/techfest/test.git
git add .
git commit -m "Initial commit"
git push -u origin master

Push an existing Git repository
cd existing_repo
git remote rename origin old-origin
git remote add origin https://gitlab.com/techfest/test.git
git push -u origin --all
git push -u origin --tags