<div class="form-container">      
            <form      

            method="POST" 
            action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" 
            id="commentForm" >

                <!-- Import check Message -->
                <label for="message">Comment message</label>
                <p class="inform">Write your comment (English language), min.5, max.200 
                    characters</p>
                <textarea 
                    name="message" 
                    rows="10" 
                    cols="50"
                    minlength="5" 
                    maxlength="202" 
                    placeholder="Write a comment* (Required)" 
                    id="message"></textarea><br>
                        
                <button type="submit" class="btn" 
                    name="post_comment">Post Comment</button>

            </form>
        </div> 