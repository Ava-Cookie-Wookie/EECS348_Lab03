# AI Usage Log

**Platform:** Claude (claude.ai)
**Model:** Claude Sonnet 5

---

## Interaction 1

### User

I'm on the part were I'm actually coding the website. Can you give me the code to help me finish?

### Assistant Summary

Provided starter code for all four Lab 3 practices: an HTML/CSS profile page with a photo, hyperlink, and video placeholder; a CSS/JavaScript page with input fields to set paragraph text color, border color, and border width via RGB values; a JavaScript password verification script that checks for an 8-character minimum and matching passwords; and a PHP script that generates a multiplication table from a submitted number, including row and column headers. Also noted steps for publishing to the People link and GitHub.

---

## Interaction 2

### User

[Uploaded file: excerpt_from_previous_claude_message.txt]

This one has lots of errors when I input it into VSCode

### Assistant Summary

Noted that the uploaded file only contained a header line ("Practice 2: CSS Font/Color Control (practice2.html)") with no actual code, so the errors couldn't be diagnosed from it. Asked for the actual error messages or a screenshot, and listed common causes of VS Code linter warnings (inline styles, inline `onclick` handlers, smart-quote issues from copy-pasting, missing DOCTYPE).

---

## Interaction 3

### User

[Pasted the full practice2.html code, including DOCTYPE, head, body with paragraph, RGB input fields, and a JavaScript `applyStyles()` function]

### Assistant Summary

Confirmed the pasted code was valid HTML5/JavaScript and would run correctly in a browser. Explained that any flagged issues were likely non-blocking linter/style warnings (inline styles, inline event handlers, `<label>` elements missing a `for` attribute, optional self-closing void elements) rather than real errors. Asked for the actual error text from the Problems tab to confirm.

---

## Interaction 4

### User

python -u "/home/ace_wookie/EECS_348/Lab03/tempCodeRunnerFile.py"
[ace_wookie@DESKTOP-18I34LK Lab03]$ python -u "/home/ace_wookie/EECS_348/Lab03/tempCodeRunnerFile.py"
  File "/home/ace_wookie/EECS_348/Lab03/tempCodeRunnerFile.py", line 1
    <!DOCTYPE html>
    ^
SyntaxError: invalid syntax
[ace_wookie@DESKTOP-18I34LK Lab03]$

### Assistant Summary

Identified that the error was caused by VS Code's Code Runner extension attempting to execute the HTML file as a Python script, producing a temporary `.py` file from the HTML content. Explained that HTML files are not meant to be run with an interpreter, and recommended either installing the "Live Server" extension to preview the page or opening the HTML file directly in a browser. Reiterated that the file ultimately needs to be placed in `public_html` on the cycle server to be reachable via the course's People link.

---

## Interaction 5

### User

How do I get the video to work?

### Assistant Summary

Explained the steps needed to get a video working in the Practice 1 profile page: uploading an actual video file to the server via `scp`, `wget`, or `sftp`; matching the filename exactly (case-sensitive) in the `<source src="...">` attribute; setting file permissions with `grant_permission.sh` or `chmod 644`; and keeping file size manageable, with an example `ffmpeg` command for compression.

---

## Interaction 6

### User

could I get one from youtubes embeded code instead

### Assistant Summary

Confirmed that a YouTube embed is a simpler alternative to a self-hosted video file. Explained how to obtain the embed code from YouTube's Share → Embed option and how to replace the `<video>` tag with an `<iframe>` pointing to the YouTube embed URL. Noted this avoids the need for file upload or permission changes, and suggested confirming with the TA that an embedded video satisfies the assignment requirement.

---

## Interaction 7

### User

Does this still follow the rubric of the assignment?

### Assistant Summary

Reviewed the lab instructions PDF and noted the stated requirement was only to "include... a video," without specifying a self-hosted file or native `<video>` tag, so a YouTube embed satisfies a literal reading of the requirement. Pointed out that Practice 1 was framed as open-ended ("Have fun with this!") compared to the other practices' precise technical specs. Noted that no separate grading rubric document was available, and recommended confirming with the TA or professor to remove any ambiguity.

---

## Interaction 8

### User

Does my code need anything else or can I push to the repo?

### Assistant Summary

Provided a pre-push checklist covering: confirming the photo loads correctly on Practice 1, confirming the YouTube video embed renders live, testing Practice 2's RGB color/border inputs, testing Practice 3's password verification logic with short/mismatched/matching inputs, testing Practice 4's PHP multiplication table with sample numbers, re-running `grant_permission.sh` after any file changes, loading the live People link in an incognito window to simulate the TA's view, and confirming the local Git repo matches what's live on the server before committing.

---

## Interaction 9

### User

Last login: Tue Sep 15 16:11:38 2026 from 172.59.78.158
a416k976@cycle3:~$ bash grant_permission.sh
bash: grant_permission.sh: No such file or directory
a416k976@cycle3:~$

### Assistant Summary

Diagnosed that the script was missing from the current directory and suggested running `find ~ -name "grant_permission.sh"` to locate it, or running it with its full path if found elsewhere. Provided a fallback command to re-download the script fresh via `wget` from the instructor's original page if it could not be located, followed by running it again.

---
