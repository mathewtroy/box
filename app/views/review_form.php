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
                    rows="8" 
                    cols="30"
                    minlength="5" 
                    maxlength="202" 
                    placeholder="Write a comment* (Required)" 
                    id="message"><?= htmlspecialchars($message); ?></textarea><br>

                    <?php
                        if (isset($validateReviewMin) && $validateReviewMin == false) {
                            echo '<span class="error">Comment must be at least 5 
                            characters! </span>';
                        }

                        if (isset($validateReviewMax) && $validateReviewMax == false) {
                            echo '<span class="error">Comment must be no more than 
                            200 characters! </span>';
                        }

                        if (isset($validateReviewPattern) && $validateReviewPattern == false) {
                            echo '<span class="error">Comment must contain valid 
                            characters without special symbols! </span>';
                        }    
                    ?>
                        
                <span class="error"></span>
                        
                <br>
                <button type="submit" class="btn" 
                    name="post_comment">Post Comment</button>

            </form>
        </div> 