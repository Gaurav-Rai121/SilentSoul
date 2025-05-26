  let commentsData = [
            {
                id: 1,
                author: "SupportiveListener",
                avatar: "S",
                time: "1 hour ago",
                content: "I completely understand what you're going through. I went through something similar last year. Have you considered talking to a counselor? It really helped me process these feelings without the pressure of maintaining appearances.",
                likes: 23,
                replies: [
                    {
                        id: 101,
                        author: "Anonymous",
                        avatar: "A",
                        time: "45 minutes ago",
                        content: "Thank you for sharing this. I've been thinking about counseling but wasn't sure if it would help. Your comment gives me hope.",
                        likes: 8
                    }
                ]
            },
            {
                id: 2,
                author: "MentalHealthAdvocate",
                avatar: "M",
                time: "2 hours ago",
                content: "Your feelings are completely valid. The pressure to appear 'fine' all the time is exhausting. Remember that seeking help is a sign of strength, not weakness. You don't have to carry this burden alone.",
                likes: 45,
                replies: []
            },
            {
                id: 3,
                author: "QuietSupporter",
                avatar: "Q",
                time: "3 hours ago",
                content: "I see you, and your struggle is real. Sometimes the bravest thing we can do is admit we're not okay. Have you tried journaling? It helped me organize my thoughts before I was ready to talk to someone.",
                likes: 12,
                replies: [
                    {
                        id: 301,
                        author: "JournalWriter",
                        avatar: "J",
                        time: "2 hours ago",
                        content: "Journaling changed my life! I started with just 5 minutes a day and it grew from there. Sometimes writing what I couldn't say out loud was exactly what I needed.",
                        likes: 6
                    },
                    {
                        id: 302,
                        author: "Anonymous",
                        avatar: "A",
                        time: "1 hour ago",
                        content: "I never thought about journaling before. Maybe I should give it a try. Do you have any tips for getting started?",
                        likes: 3
                    }
                ]
            }
        ];

        function renderComments() {
            const commentsList = document.getElementById('commentsList');
            commentsList.innerHTML = commentsData.map(comment => createCommentHTML(comment)).join('');
        }

        function createCommentHTML(comment) {
            const repliesHTML = comment.replies.map(reply => createReplyHTML(reply, comment.id)).join('');
            
            return `
                <div class="comment-item glass-dark rounded-2xl p-6">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-gradient-to-r from-green-500 to-blue-500 rounded-full flex items-center justify-center text-sm font-bold flex-shrink-0">
                            ${comment.avatar}
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-2">
                                <h4 class="font-semibold text-purple-300">${comment.author}</h4>
                                <span class="text-sm text-gray-400">${comment.time}</span>
                            </div>
                            <p class="text-gray-200 leading-relaxed mb-4">${comment.content}</p>
                            
                            <div class="flex items-center gap-6">
                                <button onclick="likeComment(${comment.id})" class="flex items-center gap-2 text-gray-400 hover:text-red-400 transition-colors group">
                                    <svg class="w-4 h-4 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 000-6.364 4.5 4.5 0 00-6.364 0L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                    <span>${comment.likes}</span>
                                </button>
                                <button onclick="toggleReplyForm(${comment.id})" class="flex items-center gap-2 text-gray-400 hover:text-blue-400 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"></path>
                                    </svg>
                                    Reply
                                </button>
                            </div>
                            
                            <!-- Reply Form -->
                            <div id="replyForm-${comment.id}" class="reply-form mt-4">
                                <div class="flex gap-3">
                                    <div class="w-8 h-8 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-xs font-bold">
                                        U
                                    </div>
                                    <div class="flex-1">
                                        <textarea 
                                            id="replyText-${comment.id}"
                                            placeholder="Write a supportive reply..."
                                            class="w-full bg-white/5 border border-white/10 rounded-lg p-3 text-sm text-white placeholder-gray-400 resize-none focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-300"
                                            rows="2"
                                        ></textarea>
                                        <div class="flex justify-end mt-2">
                                            <button 
                                                onclick="postReply(${comment.id})"
                                                class="bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 px-4 py-1.5 rounded-lg text-sm font-medium transition-all duration-300 transform hover:scale-105"
                                            >
                                                Reply
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Replies -->
                            ${repliesHTML ? `<div class="mt-6 space-y-4 border-l-2 border-purple-500/30 pl-6">${repliesHTML}</div>` : ''}
                        </div>
                    </div>
                </div>
            `;
        }

        function createReplyHTML(reply, parentId) {
            return `
                <div class="glass rounded-xl p-4">
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center text-xs font-bold">
                            ${reply.avatar}
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-1">
                                <h5 class="font-medium text-sm text-purple-300">${reply.author}</h5>
                                <span class="text-xs text-gray-400">${reply.time}</span>
                            </div>
                            <p class="text-gray-200 text-sm leading-relaxed mb-2">${reply.content}</p>
                            <button onclick="likeReply(${reply.id})" class="flex items-center gap-1 text-gray-400 hover:text-red-400 transition-colors text-xs group">
                                <svg class="w-3 h-3 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 000-6.364 4.5 4.5 0 00-6.364 0L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                                <span>${reply.likes}</span>
                            </button>
                        </div>
                    </div>
                </div>
            `;
        }

        function postComment() {
            const textarea = document.getElementById('mainComment');
            const content = textarea.value.trim();
            
            if (!content) return;
            
            const newComment = {
                id: Date.now(),
                author: "Anonymous",
                avatar: "U",
                time: "Just now",
                content: content,
                likes: 0,
                replies: []
            };
            
            commentsData.unshift(newComment);
            textarea.value = '';
            renderComments();
            
            // Add typing indicator effect
            showTypingIndicator();
        }

        function toggleReplyForm(commentId) {
            const replyForm = document.getElementById(`replyForm-${commentId}`);
            replyForm.classList.toggle('open');
            
            if (replyForm.classList.contains('open')) {
                setTimeout(() => {
                    document.getElementById(`replyText-${commentId}`).focus();
                }, 300);
            }
        }

        function postReply(commentId) {
            const textarea = document.getElementById(`replyText-${commentId}`);
            const content = textarea.value.trim();
            
            if (!content) return;
            
            const comment = commentsData.find(c => c.id === commentId);
            if (comment) {
                const newReply = {
                    id: Date.now(),
                    author: "Anonymous",
                    avatar: "U",
                    time: "Just now",
                    content: content,
                    likes: 0
                };
                
                comment.replies.push(newReply);
                textarea.value = '';
                toggleReplyForm(commentId);
                renderComments();
            }
        }

        function likeComment(commentId) {
            const comment = commentsData.find(c => c.id === commentId);
            if (comment) {
                comment.likes++;
                renderComments();
            }
        }

        function likeReply(replyId) {
            commentsData.forEach(comment => {
                const reply = comment.replies.find(r => r.id === replyId);
                if (reply) {
                    reply.likes++;
                }
            });
            renderComments();
        }

        function goBack() {
            // Add smooth transition effect
            document.body.style.opacity = '0';
            setTimeout(() => {
                window.history.back();
            }, 300);
        }

        function showTypingIndicator() {
            // This would show a typing indicator for other users
            console.log('Someone is typing...');
        }

        // Initialize the page
        document.addEventListener('DOMContentLoaded', function() {
            renderComments();
            
            // Add smooth scroll behavior
            document.documentElement.style.scrollBehavior = 'smooth';
            
            // Auto-resize textareas
            document.addEventListener('input', function(e) {
                if (e.target.tagName === 'TEXTAREA') {
                    e.target.style.height = 'auto';
                    e.target.style.height = e.target.scrollHeight + 'px';
                }
            });
        });

        // Add entrance animation
        window.addEventListener('load', function() {
            const elements = document.querySelectorAll('.comment-item, .glass-dark, .gradient-border');
            elements.forEach((el, index) => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    el.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });