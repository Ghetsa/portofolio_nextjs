import Link from "next/link";
import type { Project } from "@/lib/site-data";
import { ArrowRight } from "lucide-react";

type Props = {
  project: Project;
};

const accentMap = {
  lime: "bg-[#dfff00]",
  pink: "bg-[#fdb6e9]",
  blue: "bg-[#cfe5ff]",
} as const;

export function ProjectCard({ project }: Props) {
  return (
    <article className="group flex h-full flex-col border-[3px] border-[#1b1b1b] bg-[#ffffff] shadow-[4px_4px_0_0_#1b1b1b] transition-transform duration-200 hover:-translate-y-1 hover:shadow-[8px_8px_0_0_#1b1b1b]">
      <div className={`flex h-32 items-center justify-center border-b-[3px] border-[#1b1b1b] ${accentMap[project.accent]}`}>
        <span className="text-4xl">✦</span>
      </div>
      <div className="flex flex-1 flex-col p-5">
        <p className="text-xs font-bold uppercase tracking-[0.24em] text-[#556500]">{project.category}</p>
        <h3 className="mt-3 font-display text-2xl font-bold">{project.title}</h3>
        <p className="mt-3 text-sm leading-6 text-[#4f4f4f]">{project.summary}</p>
        <div className="mt-4 flex flex-wrap gap-2">
          {project.tech.slice(0, 2).map((tech) => (
            <span key={tech} className="border-[2px] border-[#1b1b1b] bg-[#f7f7f3] px-2 py-1 text-xs font-semibold">
              {tech}
            </span>
          ))}
        </div>
        <div className="mt-auto pt-5">
          <Link
            href={`/projects/${project.slug}`}
            className={`inline-flex w-full items-center justify-center gap-2 border-[3px] border-[#1b1b1b] px-4 py-3 font-bold shadow-[4px_4px_0_0_#1b1b1b] transition-transform hover:-translate-y-1 ${project.accent === "pink" ? "bg-[#fdb6e9]" : project.accent === "blue" ? "bg-[#cfe5ff]" : "bg-[#dfff00]"}`}
          >
            View Project <ArrowRight className="h-4 w-4" />
          </Link>
        </div>
      </div>
    </article>
  );
}
